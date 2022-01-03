<?php
class Elementor_Hello_World_Widget_1 extends \Elementor\Widget_Base {

    public function get_name() {
        return 'hello_world_widget_1';
    }

    public function get_title() {
        return esc_html__( 'Hello World 1', 'elementor-addon' );
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    public function get_keywords() {
        return [ 'hello', 'world' ];
    }

    protected function render() {
        ?>

        <p> Hello World </p>
        <table id="table-data">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Sitio Web</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        <?php
    }
}