---
{"category_name":"hard","problem_code":"FBCHEF","problem_name":"Final Battle of Chef","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"adurysk","problem_tester":"white_king","date_added":"17-01-2013","tags":{"0":"adurysk","1":"april14","2":"bit","3":"medium","4":"segment"},"editorial_url":"http://discuss.codechef.com/problems/FBCHEF","time":{"view_start_date":1397468362,"submit_start_date":1397468362,"visible_start_date":1397467741,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/FBCHEF.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/FBCHEF.pdf">Russian</a>.</h3>
<p>Chef declared war on Byteland. Chefs best scientist Pramod has designed a new Fighter Plane which can fly with Speed of Light!! So none of the defence forces of Byteland can defeat or defend it.</p>
<p>Byteland has a structure of a tree with <b>N</b> cities connected by <b>N-1</b> bidirectional roads. Each city has index between (<b>1</b>, <b>N</b>) (inclusive) and no two cities have same index. The capital city of Byteland has index <b>1</b>. The distance between two cities is the number of roads in the path from one to other.</p>
<p>If the plane drops a bomb on a city <b>A</b>, with damage value <b>X</b> then the damage done to a city <b>B</b> will be floor(<b>X/2<sup>d</sup></b>) where <b>d</b> is the distance between <b>A</b> and <b>B</b>, note that as the distance of <b>A</b> from itself is <b>0</b>, the damage done to <b>A</b> will be floor(<b>X/2<sup>0</sup></b>) = <b>X</b>.</p>
<p>Each city has a certain wealth <b>W<sub>i</sub></b> in it, if it is damaged by a value of <b>X</b> then its wealth is reduced by <b>X</b>. On a day if the wealth of a city becomes less than or equal to zero then it is considered Economically Dead.</p>
<p>Your task is to write a program that keeps track of the bombings done by the plane and answer the queries asked by the chef. The chef has a total of <b>Q</b> queries for you. There are two types of queries.<br /><br />1) Chef gives you two integers <b>A</b> and <b>X</b>, which means that the plane drops a bomb on the city with index <b>A</b> with damage value <b>X</b>. A bomb can also be dropped on economically dead city.<br />2) Chef gives you an integer <b>A</b> and you need to print the number of cities that are economically dead which have <b>A</b> in the path from the capital to them.<br />(See explanation for better understanding)</p>
<h3>Input</h3>
<p>First line contains an Integer representing <b>N</b> the number of cites.<br />Next <b>N</b> lines contain one integer each, integer on the <b>i<sup>th</sup></b> line represents the <b>W<sub>i</sub></b>, wealth of the city with index <b>i</b>.<br />Next <b>N - 1</b> lines contain two integers <b>U</b> and <b>V</b> each, which means that there is a road connecting cities <b>U</b> and <b>V</b>.<br />Next line contains an integer <b>Q</b>, the number of Queries.<br />Next <b>Q</b> lines represent one query each, if the first integer in the line is <b>1</b> then the query is of type <b>1</b>, it is followed by two integers <b>A</b> and <b>X</b>, else the query is of type <b>2</b>, it is followed by one integer <b>A</b>.(The meanings of the variables are well explained in the question)</p>
<h3>Output</h3>
<p>For each query of type <b>2</b> print the required value asked in the question.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>N</b> &lt;= 10<sup>5</sup> <br />1 &lt;= <b>Q</b> &lt;= 10<sup>5</sup> <br />1 &lt;= <b>A</b> &lt;= <b>N</b><br />
<br />1 &lt;= <b>U, V</b> &lt;= <b>N</b>, <b>U</b> ≠  <b>V</b><br />
<br />1 &lt;= <b>X</b> &lt;= 10<sup>5</sup><br />1 &lt;= <b>W<sub>i</sub></b> &lt;= 10<sup>9</sup><br /></p>
<h3>Example</h3>
<pre>
<b>Sample Input</b>
4
2
5
5
2
1 2
2 3
3 4
4
1 3 4
2 2
1 2 2
2 1
<b>Sample Output</b>
1
3
</pre><h3>Explanation</h3>
<p>Path from Capital to City 1 : 1</p>
<p>Path from Capital to City 2 : 1 &lt;--> 2</p>
<p>Path from Capital to City 3 : 1 &lt;--> 2 &lt;--> 3</p>
<p>Path from Capital to City 4 : 1 &lt;--> 2 &lt;--> 3 &lt;--> 4</p>
<p>Cities having 1 in the path connected to Capital City : (1,2,3,4)</p>
<p>Cities having 2 in the path connected to Capital City : (2,3,4)</p>
<p>Cities having 3 in the path connected to Capital City : (3,4)</p>
<p>Cities having 4 in the path connected to Capital City : (4)</p>
<p>Distances of cities from city 1 : (0,1,2,3)</p>
<p>Distances of cities from city 2 : (1,0,1,2)</p>
<p>Distances of cities from city 3 : (2,1,0,1)</p>
<p>Distances of cities from city 4 : (3,2,1,0)</p>
<p>Initial Wealths of the Cities : (2,5,5,2)</p>
<p>On the First Day a Bomb of Damage 4 is Dropped on City 3. So Damages Done to other Cities are (4/(2<sup>2</sup>), 4/(2<sup>1</sup>), 4/(2<sup>0</sup>), 4/(2<sup>1</sup>)) = (1,2,4,2). Wealths of Cities after Day 1 : (1,3,1,0)</p>
<p>On the Second Day City 2 is queried. As only City 4 is dead, output is 1.</p>
<p>On the Third Day a Bomb of Damage 2 is Dropped on City 2. So Damages Done to other Cities are (2/(2<sup>1</sup>), 2/(2<sup>0</sup>), 2/(2<sup>1</sup>), 2/(2<sup>2</sup>)) = (1,2,1,0). Wealths of Cities after Day 3 : (0,1,0,0)</p>
<p>On the Fourth Day City 1 is queried. As Cities (1,3) are dead on third day and city 4 on first day, so the output is 3.</p>
