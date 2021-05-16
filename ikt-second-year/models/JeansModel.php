<?php


class JeansModel extends BaseModel {


    /**
     * @var JeansRepository
     */
    private  $jeansRepo;

    public  function __construct() {
        $this->jeansRepo = new JeansRepository();
    }

    /**
     * @param $data
     * @return bool
     */
    public function create($data)
    {
        return $this->jeansRepo->create($data);
    }

    /**
     * @param $jeans_id
     * @return mixed
     * show only one item
     */
    public function view($jeans_id) {
        return $this->jeansRepo->getById($jeans_id);
    }

    /**
     * @return array|mixed
     */
    public function listAll()
    {
        return $this->jeansRepo->getAll();
    }

    /**
     * @param $topic
     * @return mixed
     */
    public function search($topic){
        return $this->jeansRepo->getAllByTopic($topic);
    }

    /**
     * @param $data
     * @return bool|mixed
     */
    public function update($data)
    {
        return $this->jeansRepo->update($data);
    }

    /**
     * @param $jeans_id
     * @return bool|mixed
     */
    public function delete($jeans_id)
    {
        return $this->jeansRepo->delete($jeans_id);
    }
}