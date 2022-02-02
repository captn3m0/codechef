---
{"category_name":"easy","problem_code":"RBTREE","problem_name":"Chef and Red Black Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":null,"date_added":"28-09-2014","tags":{"0":"ad","1":"easy","2":"graph","3":"lca","4":"ma5termind","5":"nov14"},"editorial_url":"http://discuss.codechef.com/problems/RBTREE","time":{"view_start_date":1416216600,"submit_start_date":1416216600,"visible_start_date":1416216600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/RBTREE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/RBTREE.pdf">Russian</a>.</h3>
<p>Chef likes trees a lot. Today he has an infinte full binary tree (each node has exactly two childs) with special properties.<br />
Chef's tree has the following special properties :</p>
<ul>
<li>Each node of the tree is either colored <b>red</b> or <b>black</b>.</li>
<li>Root of the tree is <b>black</b> intially.</li>
<li>Both childs of a <b>red</b> colored node are <b>black</b> and both childs of a <b>black</b> colored node are <b>red</b>.</li>
</ul>
<p>
The root of the tree is labelled as 1. For a node labelled <b>v</b>, it's left child is labelled as <b>2*v</b> and it's right child is labelled as <b>2*v+1</b>.
</p>
<p>
Chef wants to fulfill <b>Q</b> queries on this tree. Each query belongs to any of the following three types:
</p>
<ul>
<li><b>Qi</b> 	   Change color of all <b>red</b> colored nodes to <b>black</b> and all <b>black</b> colored nodes to <b>red</b>.</li>
<li><b>Qb x y</b>  Count the number of <b>black</b> colored nodes on the path from node <b>x</b> to node <b>y</b> (both inclusive).</li>
<li><b>Qr x y</b>  Count the number of <b>red</b> colored nodes on the path from node <b>x</b> to node <b>y</b> (both inclusive).</li>
</ul>
<p>Help chef accomplishing this task.<br />
<br /><br />
<b>Input</b><br /><br />
First line of the input contains an integer <b>Q</b> denoting the number of queries. Next <b>Q</b> lines of the input contain <b>Q</b> queries (one per line). Each query belongs to one of the three types mentioned above.<br />
<br /><br />
<b>Output</b><br /><br />
For each query of type <b>Qb</b> or <b>Qr</b>, print the required answer.<br />
<br /><br />
<b>Constraints</b><br /></p>
<ul>
<b>
<li>1&lt;=Q&lt;=10<sup>5</sup></li>
<p></p></b><br />
<b>
<li>1&lt;=x,y&lt;=10<sup>9</sup></li>
<p></p></b>
</ul>
<p><br /><br />
<b>Sample Input</b><br /><br />
5<br />
Qb 4 5<br />
Qr 4 5<br />
Qi<br />
Qb 4 5<br />
Qr 4 5<br />
<br /><br />
<b>Sample Output</b><br /><br />
2<br />
1<br />
1<br />
2<br />
<br /><br />
<b>Explanation</b><br /><br />
With the initial configuration of the tree, Path from node 4 to node 5 is 4->2->5 and color of nodes on the path is B->R->B.  </p>
<ul>
<li>Number of black nodes are 2.</li>
<li>Number of red nodes are 1. </li>
</ul>
<p>After Query Qi, New configuration of the path from node 4 to node 5 is R->B->R.</p>
<ul>
<li>Number of black nodes are 1.</li>
<li>Number of red nodes are 2. </li>
</ul>
<p><br /><br />
<b>Scoring</b></p>
<ul>
<li> Subtask #1: <b>1&lt;=Q&lt;=100  1&lt;=x,y&lt;=1000</b>   	         	                        <b>: 27 pts</b></li>
<li> Subtask #2: <b>1&lt;=Q&lt;=10<sup>3</sup>  1&lt;=x,y&lt;=10<sup>5</sup>       :  <b>25 pts</b></b></li>
<p></p>
<li> Subtask #3: <b>1&lt;=Q&lt;=10<sup>5</sup>  1&lt;=x,y&lt;=10<sup>9</sup>       :  <b>48 pts</b></b></li>
<p>
</p></ul>
