---
{"category_name":"challenge","problem_code":"EBOLA","problem_name":"Fighting Ebola","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"nssprogrammer","problem_tester":"xcwgf666","date_added":"20-04-2015","tags":{"0":"aug16","1":"challenge","2":"nssprogrammer","3":"researching"},"editorial_url":"http://discuss.codechef.com/problems/EBOLA","time":{"view_start_date":1471253400,"submit_start_date":1471253400,"visible_start_date":1471253400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/mandarin/EBOLA.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/russian/EBOLA.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/vietnamese/EBOLA.pdf">Vietnamese</a> as well.</h3>



<p>An analysis of the ongoing <a href="http://en.wikipedia.org/wiki/Ebola_virus_disease">Ebola</a> outbreak reveals that transmission of the virus occurs in social networks. Usually a social network is represented as an undirected graph <b>G = (V, E)</b>, where <b>V</b> denotes the set of nodes and <b>E</b> denotes the set of edges. Each node in the graph is assigned an integer weight for it.</p>

<p>At time <b>t = 0</b>, all the nodes of the graph are vulnerable. Node <b>S</b> of the graph has just been infected by Ebola. At each instant of time <b>t > 0</b>, any vulnerable node <b>v</b> which is connected to some infected node <b>u</b> (i.e. <b>(u, v) ∈ E</b>) also gets infected, unless it was vaccinated at some time <b>t<sup>'</sup> <=  t</b>. A node once infected always remains infected and a vaccinated node can never be infected. Obviously once a node is infected, there is no point of vaccinating it. A node is called <b>saved</b> if it is not infected till the end (at <b>t = infinity</b>, a long time afterwards).</p>

<p>You, being in-charge of biggest hospital in the area, have been given the responsibility of vaccinating the nodes of the graph. There are total <b>K</b> units of supply of vaccines in the hosptial. Your target is to vaccinate certain number of nodes using these <b>K</b> units of vaccines. You will start vaccinating the nodes from time <b>t = 1</b>, up to time <b>t = K</b>. Note that you can not vaccinate more than one node a particular time. Also notice that it is better to not skip a vaccination at any time instance between <b>t = 1</b> to <b>t = K</b>, so we enforce you to vaccinate at least some node at each instant. You can choose to vaccinate a node more than once, but it will be pointless. You can also choose to try to vaccinate an already infected node, but it will also be pointless.</p>

<h3>What needs to be optimized?</h3>
<p>
Your score will be the sum of weights of all the nodes those are not infected (at <b>t = inf</b>, after a long time). You have to maximize value of score.
</p>

<h3>Input</h3>
<p>The first line contains four space separated  integers <b>N</b>, <b>M</b>, <b>K</b> and <b>S</b>, denoting the number of nodes, the number of edges,the number of units of the vaccines available and the index of the node at which the Ebola virus starts infecting the social network respectively.</p>
<p>The next line contains <b>N</b> space separated integers <b>w<sub>i</sub></b> , each integer specifying the weight of <b>i<sup>th</sup></b> node, where <b>1 ≤ i ≤ N</b>.</p>
<p>Then <b>M</b> lines follow.</p>
<p>The <b>i<sup>th</sup></b> of such lines contains two space separated integers <b>x</b> and <b>y</b> representing the edge joining nodes <b>x</b> and <b>y</b>.</p>

<h3>Output</h3>
<p>Output <b>K</b> space separated integers denoting the indices of the nodes in the order of their vaccination. Note that if you don't have any uninfected node to vaccinate, you can print any dummy node to try to vaccinate.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>S</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>5*10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>500</b> </li>
<li><b>1</b> ≤ <b>w<sub>i</sub></b>  ≤ <b>10<sup>3</sup></b> </li>
<li>Graph <b>G</b> is connected. It does not have multi-edges and self loops.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>15 22 3 1
2 3 1 4 5 3 6 8 2 4 8 1 4 8 9
1 2
1 7
1 12
2 3
2 4
2 5
2 6
3 4
3 9
4 6
5 6
5 8
5 10
6 10
7 8
7 11
8 10
9 14
12 13
12 14
12 15
14 15</tt>

<b>Output:</b>
<tt>2 14 6</tt>
</pre>

<h3>Explanation</h3>
<p>The above example is well illustrated through following figures. Infection is represented by red circle and vaccination is represented by green circle. At the end of the process  nodes 2, 3, 4, 6, 9 and 14 are saved. The sum of the weights of these nodes is 21. So, the score is 21.</p>

<p><b>t = 0</b></br> <img src= "http://www.codechef.com/download/upload/AUG16/E1.jpg" height="150"></img></p>
<p><b>t = 1</b></br> <img src= "http://www.codechef.com/download/upload/AUG16/E2.jpg"   height="150"></img></p>
<p><b>t = 2</b></br> <img src= "http://www.codechef.com/download/upload/AUG16/E3.jpg"  height="150"></img></p>
<p><b>t = 3</b></br> <img src= "http://www.codechef.com/download/upload/AUG16/E4.jpg"  height="150"> </img></p>

<h3>Test Case  Generation</h3>
<p>All the test cases have  been divided into broadly 4 groups.</p>

<h3>Description of groups of test cases</h3>
<p>Each group has 5 test files. All the test files in the group will follow these constraints.</p>
<ul>
<li><b>minN</b> ≤ <b>N</b> ≤ <b>maxN</b></li>
<li><b>minM</b> ≤ <b>M</b> ≤ <b>maxM</b></li>
<li><b>minK</b> ≤ <b>K</b> ≤ <b>maxK</b></li>
<li><b>N, M, K</b> will be choosen uniformly randomly in the above described ranges.</li>
<li><b>S</b> will choosen uniformly randomly in the range <b>[1..N]</b>.</li>
</ul>
</p>

<p>In one test file, Graph <b>G</b> will be a 4-regular graph. Please ignore the constraints on <b>M</b> displayed above in that case. All other constraints will be applicable on <b>G</b>.</p>

<p>In one of the test files, the graph will be a connected biparite graph following the given constraints.</p>

<p>In other remaining three files, the graph will be random connected graphs satisfying the given constraints.</p>

<p>
<h3>Group 1</h3>
<ul>
<li><b>minN = 290</b> & <b>maxN = 300</b></li>
<li><b>minM = 900</b> & <b>maxM = 1000</b></li>
<li><b>minK = 35</b> & <b>maxK = 50</b></li>
</ul>

<h3>Group 2</h3>
<ul>
<li><b>minN = 970</b> & <b>maxN = 1000</b></li>
<li><b>minM = 9900</b> & <b>maxM = 10000</b></li>
<li><b>minK = 35</b> & <b>maxK = 50</b></li>
</ul>

<h3>Group 3</h3>
<ul>
<li><b>minN = 9990</b> & <b>maxN = 10000</b></li>
<li><b>minM = 35000</b> & <b>maxM = 40000</b></li>
<li><b>minK = 35</b> & <b>maxK = 50</b></li>
</ul>

<h3>Group 4</h3>
<ul>
<li><b>minN = 9990</b> & <b>maxN = 10000</b></li>
<li><b>minM = 35000</b> & <b>maxM = 40000</b></li>
<li><b>minK = 350</b> & <b>maxK = 500</b></li>
</ul>
</p>

<p>During the contest, your submissions will be evaluated on the test files. If you get a non-AC verdict in any of the test files, you will be notified about that. However, if you get an AC verdict, then the score displayed will be only of 20% of the test files. Those 20% of the test files will be 4-regular, bipartite and 2 random connected graphs of group 4. After the contest, your submission will be rejudged and score will correspond to all the test files.</p>