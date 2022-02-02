---
{"category_name":"medium","problem_code":"SPANTREE","problem_name":"Spanning Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"LISP sbcl","36":"LISP clisp","37":"SCM guile","38":"JS","39":"ERL","40":"TCL","41":"kotlin","42":"PERL6","43":"TEXT","44":"SCM chicken","45":"CLOJ","46":"COB","47":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sidhant007","problem_tester":null,"date_added":"1-12-2017","tags":{"0":"acm17kgp","1":"constructive","2":"graph","3":"interactive","4":"kgp17rol","5":"mst","6":"sidhant007"},"editorial_url":"https://discuss.codechef.com/problems/SPANTREE","time":{"view_start_date":1515875400,"submit_start_date":1515875400,"visible_start_date":1515875400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given an undirected weighted connected graph with <b>N</b> vertices numbered from 1 to <b>N</b>. Chef knows all the edges of the graph but will only reveal information if you give him some money.</p>

<p>You have <b>10<sup>4</sup> coins</b>. You are allowed to ask the chef a certain type of query multiple times. In a single query, you will provide <b>2</b> non-intersecting, non-empty set of vertices. Let <b>A</b> be the first set and <b>B</b> be the second set. Chef then will respond by providing the minimum (least) weight edge between any pair of nodes <b>u</b> and <b>v</b>, such that node <b>u</b> is in set <b>A</b> and node <b>v</b> is in set <b>B</b>. In particular, he will return the end points of the least weight edge along with the weight of this edge (in case of a tie, Chef will choose arbitrarily). If there is no such edge, Chef returns <b>-1</b>. A single query costs you <b>|A|</b> coins, where |X| denotes the size of the set X. Do note that the Chef does NOT like too many numbers, so he has allowed the sum of <b>|A| + |B|</b> over all the queries to be at most <b>2*10<sup>6</sup></b></p>

<p>Your aim is to determine the sum of all the weights in a minimum spanning tree of this graph using at most 10<sup>4</sup> coins.</p>

<h3>Input and Output</h3>
<p>You can interact with the judge using the standard input and output.</p>
<p>The first line of the input contains a single integer <b>N</b>, denoting the number of vertices.</p>
<p>You need to print to the standard output, for the operations you wish to perform. There are two types of operations:</p>
<ul>
<li>In the first type, you are asking the judge the least weight edge between 2 sets, <b>A</b> and <b>B</b>. You need to print <b>3</b> lines.
<ul>
<li>The first line starts with <b>1 |A| |B|</b>, where <b>|A|</b> and <b>|B|</b> are the size of the 2 sets.</li>
<li>The second line contains <b>|A|</b> integers, denoting the elements of the set <b>A</b>.</li>
<li>The thirdline contains <b>|B|</b> integers, denoting the elements of the set <b>B</b>.</li>
</ul>
<p>The judge will return a triplet of integers by printing the integers in the standard input. It will be in the format <b>u v w</b>, where <b>u</b> and <b>v</b> denote the end points of the least weight edge between the 2 sets and <b>w</b> denotes the cost of this edge. In case there is no such edge then <b>u = v = w = -1</b></p>
</li>
<li>In the second type, you are telling the judge the answer. For each test case you should perform this operation exactly once at the end. It does not cost you any coins.
<p>You will print the answer to the standard output in the format <b>2 X</b>, where <b>X</b> should be the sum of all edge weights in a minimum spanning tree of this graph.</p>
</li>
</ul>

<h3>Note</h3>
<p>Don't forget to flush the standard output after printing each line. It can be done using fflush(stdout) in C/C++, System.out.flush() in Java and sys.stdout.flush() in Python.</p>
<p>If the <b>2</b> sets <b>A</b> and <b>B</b> given in the input are intersecting OR one of them is empty OR there are duplicate elements in one of them OR one of them has an element which does NOT belong to the range <b>[1, N]</b>, then your program will get the verdict Wrong Answer.</p>
<p> Also if you cross the limit of <b>10<sup>4</sup></b> coins OR the sum of <b>|A| + |B|</b> over all the operations of type 1 exceeds the limit of <b>2*10<sup>6</sup></b>, then your program will get the verdict Wrong Answer.</p>
<p>The query of second type doesn't cost you any coin.</p>
 
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b></li>
<p></p>
<p> For each query - 
<li><b>1</b> ≤ <b>u</b>, <b>v</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>w</b> ≤ <b>10<sup>5</sup></b></li>
</p>
</ul>

<h3>Example</h3>
<pre><b>Input / Judge Feedback</b>                    <b>Your output / Your query</b>

5
                                                                1 1 1
                                                                1
                                                                5
1 5 2
                                                                1 1 2
                                                                2
                                                                1 4
2 1 3
                                                                1 2 2
                                                                1 2
                                                                4 3
1 4 8
                                                                1 1 1
                                                                4
                                                                5
-1 -1 -1
                                                                1 1 2
                                                                2
                                                                3 5
2 5 7
                                                                1 3 1
                                                                4 2 5
                                                                3
4 3 5
                                                                2 18

</pre>
<h3>Explanation</h3>
<p>The graph (which is hidden) in the sample has 5 nodes and the sum of the weights in the MST is 18.</p>

<p>
<img src = "https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KGP/SPANTREE.png" alt="Explanation for the sample">
</p>

<p>
<ul>
<li>The cost of the first query is 1 coin.</li>
<li>The cost of the second query is 1 coin.</li>
<li>The cost of the third query is 2 coins.</li>
<li>The cost of the fourth query is 1 coin.</li>
<li>The cost of the fifth query is 1 coin.</li>
<li>The cost of the sixth (last) query is 3 coins.</li>
</ul>
</p>
<p> So the total amount of coins used = 1 + 1 + 2 + 1 + 1 + 3 = 9 coins which is ≤ 10,000 coins </p>
<p> Note - The above queries are not an ensured method of finding the correct answer given the graph had different edges, so please do NOT try to make any logical deductions using the sample queries.</b>