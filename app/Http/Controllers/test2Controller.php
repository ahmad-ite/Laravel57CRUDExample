class TestAPIController extends Controller
{
public function index()
{
return Article::all()->toJson();

}
}
