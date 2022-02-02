---
{"category_name":"medium","problem_code":"MLCHEF","problem_name":"Merciless Chef","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"adurysk","problem_tester":"xcwgf666","date_added":"22-01-2013","tags":{"0":"adurysk","1":"data","2":"medium","3":"segment","4":"sept13"},"editorial_url":"http://discuss.codechef.com/problems/MLCHEF","time":{"view_start_date":1379323983,"submit_start_date":1379323983,"visible_start_date":1379323800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>These days Chief Chef is becoming more and more merciless. His mind is becoming full of cruel intentions. Today he has decided to slowly poison and kill some of the staff members of his kitchen. Yeah, he is bored with them. There are <b>N</b> Chefs in the kitchen besides the Chief Chef. Every Chef in the kitchen has an index.</p>
<p>The index of the Chief Chef is <b>0</b>. Remaining <b>N</b> chefs have indices between <b>1</b> and <b>N</b> and no two chefs have the same index. As any other kitchen in the street, every chef has exactly one Immediate-Superior and can have any number of Superiors above him. A chef (say <b>A</b>) is Superior of another chef (say <b>B</b>) if either <b>A</b> is the Immediate-Superior of <b>B</b> or <b>A</b> is the Superior of Immediate-Superior of <b>B</b>. The Chief Chef is on the top position and Superior to all <b>N</b> chefs and has no Superior above him.</p>
<p>If <b>A</b> is Immediate-Superior of <b>B</b>, then <b>B</b> is called Immediate-Inferior of <b>A</b>. If <b>A</b> is Superior of <b>B</b> then <b>B</b> is called Inferior of <b>A</b> (See the example for better explanation).</p>
<p>Every chef makes exactly one dish daily. There is a small custom in the kitchen that every day each chef should taste the dishes made by all his superiors on that day. So if our Chief Chef swaps the dish made by Chef <b>A</b> with a poisonous one, every Inferior of <b>A</b> will taste this dish on that day and get poisoned. Every poisonous dish has some specific sickness value <b>X</b> and the health of every chef poisoned by it decreases by <b>X</b> on that day. As soon as the health of a chef drops to zero or less, he dies.</p>
<p>When a chef dies in the kitchen, Chief Chef recruits a new chef to replace the dead chef, so the Immediate Superior and all the Immediate Inferiors of the dead chef will become the Immediate Superior and Immediate Inferiors of the new chef respectively. The newly recruited chefs are very healthy. In fact, you can assume that they have infinite health.</p>
<p>Chef has made some poison recipes and has some queries for you. He asks you one query per day for <b>Q</b> continuous days. He has two types of queries: <br />1) He gives you two integers <b>A</b> and <b>X</b> which means that he wants to make the dish made by <b>A</b> poisonous on that day with a poison of sickness value <b>X</b>. <br />2) He gives you one integer <b>A</b>. In this type of query he wants to know how many chefs among the inferiors of <b>A</b> are old chefs, i.e, not newly recruited chefs.</p>
<p>Remember that chef can also poison the dish made by himself, which will be tasted by all <b>N</b> chefs.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>N</b>.<br />The next <b>N</b> lines have two integers each. The first integer on the <b>i</b>-th line is the health and the second integer is the index of the immediate superior of chef with index <b>i</b>.<br />The index of immediate superior of the chef is strictly less than the index of the chef.<br />The next line contains an integer <b>Q</b>.<br />The next <b>Q</b> lines contain one query each. Each query starts with an integer which represents the type of query. If it is <b>1</b>, then it is of the first type and is followed by two space separated integers <b>A</b> and <b>X</b> (in this order). If it is <b>2</b>, it is of the second type and is followed by one integer <b>A</b>. <br />The meanings of variables are well explained in the statement. </p>
<h3>Output</h3>
<p>For each query of the second type, print one integer as asked in the question.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>N</b> &lt;= 10<sup>5</sup><br />1 &lt;= <b>Q</b> &lt;= 10<sup>5</sup><br />0 &lt;= <b>A</b> &lt;= <b>N</b><br />1 &lt;= <b>H</b> &lt;= 10<sup>9</sup><br />1 &lt;= <b>X</b> &lt;= 10<sup>4</sup><br /></p>
<h3>Example</h3>
<pre>
<b>Sample Input</b>
4
1 0
2 0
2 2
1 2
4
1 2 1
2 2
1 0 1
2 0

<b>Sample Output</b>
1
1
</pre><h3>Example explanation</h3>
<p>In this sample, chef-<b>1</b> and chef-<b>2</b> have Chief Chef(chef-<b>0</b>) as immediate superior and chef-<b>3</b> and chef-<b>4</b> have  chef-<b>2</b> as immediate-superior.</p>
<p>Immediate inferiors of the chefs are :<br /><br />chef-<b>0</b> -> chef-<b>1</b> and chef-<b>2</b><br />chef-<b>1</b> -> <i>None</i><br />chef-<b>2</b> -> chef-<b>3</b> and chef-<b>4</b><br />chef-<b>3</b> -> <i>None</i><br />chef-<b>4</b> -> <i>None</i><br /><br />Inferior chefs of the respective chefs are :<br /><br />chef-<b>0</b> -> chef-<b>1</b>,chef-<b>2</b>,chef-<b>3</b>,chef-<b>4</b><br />chef-<b>1</b> -> <i>None</i><br />chef-<b>2</b> -> chef-<b>3</b>, chef-<b>4</b><br />chef-<b>3</b> -> <i>None</i><br />chef-<b>4</b> -> <i>None</i><br /><br /></p>
<p>Initially the healths of these <b>4</b> chefs are (<b>1</b>, <b>2</b>, <b>2</b>, <b>1</b>).</p>
<p>On the <i>first</i> day Chief Chef poisons the dish of chef-<b>2</b>, which will be tasted by his inferiors <br /> (chef-<b>3</b>, chef-<b>4</b>), with a poison of sickness value <b>1</b>. So after that the healths of these chefs become (<b>1</b>, <b>2</b>, <b>1</b>, <b>0</b>).<br />As the <b>4</b>-th chef's health dropped to <i>zero</i>, he dies on this day. He will be replaced by a new chef with INF (infinite) health.</p>
<p>Healths of Chefs after Day-1 = (1,2,1,INF).</p>
<p>On the <i>second</i> day Chief-Chef asked you the second type query to give the number of old chefs among the inferiors of chef-<b>2</b>. As one inferior of chef-<b>2</b> died on first day, only one inferior chef of chef-<b>2</b><br />is old chef, and output is <b>1</b>.</p>
<p>Healths of Chefs after Day-2 = (1,2,1,INF).</p>
<p>On the <i>third</i> day Chief Chef poisons the dish of chef-<b>0</b>(i.e, his dish) with poison sickness <b>1</b>, and it is tasted by everyone and poisons all the <b>4</b> other chefs, so after that the healths of these chefs<br /> become (<b>0</b>, <b>1</b>, <b>0</b>, <b>INF</b>). As the <b>1</b>-st and the <b>3</b>-rd chefs' health dropped to <i>zero</i>, they die on this day and are replaced by two new chefs with INF(infinite) health.</p>
<p>The health of Chefs after Day-3 is (INF,1,INF,INF).</p>
<p>On the <i>fourth</i> day Chief Chef asked you the second type query to give the number of old chefs among the inferiors of chef-<b>0</b>(Chief Chef himself). As only chef-<b>2</b> is an old chef, output is <b>1</b>.<br /></p>
<p>Healths of Chefs after Day-4 = (INF,1,INF,INF).</p>
