import { weatherInfo } from "./weatherInfo.js";
import { updateClock } from "./clock.js";
import { navIconSwitch } from "./nav.js";
import { formConnectionControl} from "./formConnection.js";
import { birthdayManager} from "./birthdayManager.js";

const pageId = document.querySelector('.page-id');

pageIdJSModuleSelection(pageId);

function pageIdJSModuleSelection(pageId) 
{
    const id = pageId.getAttribute('id');
    console.log(id);
    switch(id) {
        case "page-api":
            break;
        case "page-api-connected":
            break;
        case "page-connection":
            formConnectionControl();
            break;
        case "page-about":
            break;
        case "page-birthday-dashboard":
            birthdayManager();
            break;
        case "page-birthday-manager":
            break;
        case "page-home":
            break;
                                
        default:
    }

    weatherInfo();
    updateClock();
    navIconSwitch();

}