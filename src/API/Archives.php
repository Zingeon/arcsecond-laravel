<?php
/**
 * Part of Arcsecond package
 *
 * Archives API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Archives extends API
{
    /**
     * Get List of Data Archives currently parsed by Arcsecond.io
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('archives/', $queryParams);
    }

    /**
     * Get Detail of a ESO Programme inside the ESO Archive by id
     *
     * @param string $id
     * @param array $queryParams
     * @return mixed
     */
    public function getESOProgrammeById($id, $queryParams = []) {
        return $this->get('archives/ESO/programmes/' . $id, $queryParams);
    }

    /**
     * Get List of Data Rows from the Gemini Data Archive
     *
     * @param array $queryParams
     * @return mixed
     */

    public function getGeminiData($queryParams = []) {
        return $this->get('/archives/Gemini/data/', $queryParams);
    }

    /**
     * Get Detail of a Gemini Programme inside the Gemini Archive by id
     *
     * @param string $id
     * @param array $queryParams
     * @return mixed
     */

    public function getGeminiProgrammes($id, $queryParams = []) {
        return $this->get('archives/Gemini/programmes/' . $id, $queryParams);
    }

    /**
     * Get List of Data Rows from the ESO Data Archive
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getESOData($queryParams = []) {
        return $this->get('archives/ESO/data/', $queryParams);
    }

    /**
     * Get Detail of a Data Archive currently parsed by Arcsecond.io by name
     *
     * @param string $name
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByName($name, $queryParams = []) {
        return $this->get('archives/' . $name, $queryParams);
    }
}
