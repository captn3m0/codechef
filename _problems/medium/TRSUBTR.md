---
{"category_name":"medium","problem_code":"TRSUBTR","problem_name":"Trees and Subtrees","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"TEXT","9":"PAS fpc","10":"NODEJS","11":"RUBY","12":"PHP","13":"GO","14":"HASK","15":"TCL","16":"PERL","17":"SCALA","18":"LUA","19":"BASH","20":"JS","21":"LISP sbcl","22":"PAS gpc","23":"BF","24":"CLOJ","25":"D","26":"CAML","27":"FORT","28":"ASM","29":"FS","30":"WSPC","31":"LISP clisp","32":"SCM guile","33":"PERL6","34":"ERL","35":"CLPS","36":"ICK","37":"NICE","38":"PRLG","39":"ICON","40":"PIKE","41":"SCM qobi","42":"ST","43":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vineet_adm","problem_tester":"rubanenko","date_added":"28-10-2013","tags":{"0":"cook40","1":"hashing","2":"knuth","3":"medium","4":"vineet_adm"},"problem_difficulty_level":"Medium","best_tag":"Knuth Morris Pratt Algorithm","editorial_url":"https://discuss.codechef.com/problems/TRSUBTR","time":{"view_start_date":1384713000,"submit_start_date":1384713000,"visible_start_date":1384713000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRSUBTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<h3> Read problems statements in Russian <a target="_blank" href="https://www.codechef.com/download/translated/COOK40/russian/TRSUBTR.pdf">here</a></h3>
<p>The Head Chef has a reporting hierarchy for his chefs which is basically a binary tree i.e. Each chef reports to exactly one chef and every chef can take reporting of atmost two chefs . In case two chefs report to the same chef they must report at different times . The time of reporting can have only two values : Morning or Evening ( denoted by M and E , respectively ) .The Head Chef himself is not part of the reporting structure . The Head Chef has found that a new restaurant in Byteland is opening and it is hiring a group of chefs from some existing restaurant . The new restaurant will basically make an offer to one of the chefs and all the chefs directly or indirectly reporting to the chef . The Head Chef is worried that the new restaurant may be taking away some of his chefs . The Head Chef knows that the new restaurant will not change the reporting structure of the chefs . The Head Chef also has access to the reporting structure of the new restaurant in terms of ages of Chefs  . The Head Chef wants to know whether there is a need to worry or not . He needs to worry if the new restaurant can possibly be targetting his chefs . </p>
<p>
In short given a tree <b> T</b> and another tree <b>O</b> you need to tell whether <b> O </b> is a subtree of <b> T </b> or not . The node values of <b> T </b> or <b> O </b> need not be distinct as they represent the age of the Chef . Also , a subtree of a rooted tree includes a particular node and the entire tree structure below it . </p>
<p> Two trees A and B are considered same if age(A->root ) = age(B->root) and subtree rooted at A->left is same as subtree rooted at B->left and subtree rooted at A->right is same as subtree rooted B->right .
</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>N</b> denoting the number of chefs in Head Chef's restaurant. The Chefs are denoted by number <b>1</b> to <b>N </b>.
</li><li> The next <b> N </b> lines contain ages of the chefs with the <b>i</b> th line containing the age of chef <b>i </b>. </li>
<li> The next <b> N - 1</b> lines contain two integers <b> A </b> and <b> B </b> and a character <b> C </b> which is either <b>'M'</b> or <b>'E'</b> where <b>A </b> denotes the senior chef and <b>B </b> denotes the reporting chef , and the character <b>C </b>  denotes the time of reporting . </li>
<li>The next line of the input contains an integer <b>Q</b> denoting the number of queries/possible structures of chefs of new restaurant . This is followed by description of <b>Q</b> queries . </li>
<li>The first line of each query contains an integer <b>M</b> denoting the number of chefs in new restaurant. The Chefs are denoted by numbers <b>1 </b> to <b>M</b>. </li>
<li> The next <b> M </b> lines contain the ages of the chefs with the <b>i</b> th line denoting the age of chef <b> i </b>.</li>
<li> The next <b> M - 1</b> lines contain two integers <b> A </b> and <b> B </b> and a character <b> C </b> which is either <b>'M' </b> or <b>'E'</b> where <b>B </b> denotes the reporting chef and <b>A </b> denotes the chef who takes the reporting , and the character <b>C </b>  denotes the time of reporting . </li>
</ul>
<h3>Output</h3>
<ul>
For each test case answer "YES" or "NO" as applicable .
</ul>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>Age of Chef</b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
1
2
1
2
1
1 2 M
1 3 E
2 4 E
3 5 M
2
2
1
2
1 2 M
2
1
1
1 2 M
<b>Output:</b>
NO
YES
</pre><p> </p>

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>