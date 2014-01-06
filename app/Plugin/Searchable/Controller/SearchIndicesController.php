<?php
class SearchIndicesController extends SearchableAppController {

  var $name = 'SearchIndices';
  var $paginate = array('SearchIndex' => array('limit' => 10));
  var $helpers = array('Searchable');

  function index() {

    // Redirect with search data in the URL in pretty format
    if (!empty($this->request->data)) {
      $redirect = array();
      if (isset($this->request->data['SearchIndex']['term'])
      && !empty($this->request->data['SearchIndex']['term'])) {
        $this->redirect['term'] = urlencode(urlencode($this->request->data['SearchIndex']['term']));
      } else {
        $this->redirect['term'] = 'null';
      }
      if (isset($this->request->data['SearchIndex']['type'])
      && !empty($this->request->data['SearchIndex']['type'])) {
        $this->redirect['type'] = $this->request->data['SearchIndex']['type'];
      } else {
        $this->redirect['type'] = 'All';
      }
      $this->redirect($redirect);
    }

    // Add default scope condition
    $this->paginate['SearchIndex']['conditions'] = array('SearchIndex.active' => 1);

    // Add published condition NULL or < NOW()
    $this->paginate['SearchIndex']['conditions']['OR'] = array(
      array('SearchIndex.published' => null),
      array('SearchIndex.published <= ' => date('Y-m-d H:i:s'))
    );

    // Add type condition if not All
    if (isset($this->params['type'])
    && $this->params['type'] != 'All') {
      $this->data['SearchIndex']['type'] = $this->params['type'];
      $this->paginate['SearchIndex']['conditions']['model'] = $this->params['type'];
    }

    // Add term condition, and sorting
    if (isset($this->params['term'])
    && $this->params['term'] != 'null') {
      $this->data['SearchIndex']['term'] = $this->params['term'];
      $term = $this->params['term'];
      App::import('Core', 'Sanitize');
      $term = Sanitize::escape($term);
      $this->paginate['SearchIndex']['conditions'][] = "MATCH(data) AGAINST('$term' IN BOOLEAN MODE)";
      $this->paginate['SearchIndex']['fields'] = "*, MATCH(data) AGAINST('$term' IN BOOLEAN MODE) AS score";
      $this->paginate['SearchIndex']['order'] = "score DESC";
    }

    $results = $this->paginate();

    // Get types for select drop down
    $types = $this->SearchIndex->getTypes();
    $this->set(compact('results', 'types'));
    $this->pageTitle = 'Search';

  }

}
?>