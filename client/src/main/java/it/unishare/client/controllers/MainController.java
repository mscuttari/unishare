package it.unishare.client.controllers;

import it.unishare.client.managers.ConnectionManager;

import java.net.URL;
import java.util.ResourceBundle;

public class MainController extends AbstractController {

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        ConnectionManager.getInstance().tryAutomaticLogin();
    }

}
