<?php

/** Class ShoesModel
 * Model for table shoes in the database
*/
class ShoeModel {

    /**
     * @var ShoesRepository
     */
    private  $shoesRepo;

    public  function __construct() {
        $this->shoesRepo = new ShoesRepository();
    }

    /**
     * @param $data
     * @return bool
     */
    public function create($data)
    {
        return $this->shoesRepo->create($data);
    }

    /**
     * @param $id
     * @return mixed
     * show only one item
     */
    public function view($id) {
        return $this->shoesRepo->getById($id);
    }

    /**
     * @return array|mixed
     */
    public function listAll()
    {
        return $this->shoesRepo->getAll();
    }

    /**
     * @param $topic
     * @return mixed
     */
    public function search($topic){
        return $this->shoesRepo->getAllByTopic($topic);
    }

    /**
     * @param $data
     * @return bool|mixed
     */
    public function update($data)
    {
        return $this->shoesRepo->update($data);
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function delete($id)
    {
        return $this->shoesRepo->delete($id);
    }
   }
