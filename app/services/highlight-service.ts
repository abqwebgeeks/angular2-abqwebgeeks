import {Injectable} from "@angular/core";
import {Http} from "@angular/http";
import {Observable} from "rxjs/Observable";
import {BaseService} from "./base-service";
import {Status} from "../classes/status";

@Injectable()
export class HighlightService extends BaseService {
	constructor(protected http: Http) {
		super(http);
	}

	private highlightUrl = "highlight/";

	getHighlight(filename: string) : Observable<string> {
		return(this.http.get(this.highlightUrl + "?filename=" + filename)
			.map(this.extractData)
			.catch(this.handleError));
	}
}
