import { startStimulusApp } from '@symfony/stimulus-bundle';

const app = startStimulusApp();
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);
// Importer les styles de Bootstrap
import 'bootstrap/dist/css/bootstrap.min.css';

// Importer les scripts de Bootstrap
import 'bootstrap';
