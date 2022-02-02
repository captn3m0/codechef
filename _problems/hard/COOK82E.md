---
{"category_name":"hard","problem_code":"COOK82E","problem_name":"Binary Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"deadwing97","problem_tester":"kingofnumbers","date_added":"21-05-2017","tags":{"0":"deadwing97"},"time":{"view_start_date":1495391400,"submit_start_date":1495391400,"visible_start_date":1495391400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/mandarin/COOK82E.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/russian/COOK82E.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK82/vietnamese/COOK82E.pdf">vietnamese</a> as well.</h3>

<p>Hussain met his friend Alex finally for the first time, because Alex travelled to USA. Hussain decided to treat him to a problem. Hussain challenged Alex to solve this task :</p>

<p>Hussain has a binary tree, initially consisting of 1 node (called the root), and it has label 1. A binary tree is a tree where the number of children of any node is at most 2.</p>

<p>This tree has a very nice property: At the end of each second, each leaf (a node with no children) labelled <b>x</b> will produce 2 children. The new left child will be labelled <b>2*x</b> and the new right child will be labelled <b>2*x+1</b>.</p>

<p>If a node has only one child, it just reproduces the other one. (The already existing child isn't affected). </p>

<p>Hussain can perform 2 operations on this tree : </p>

<ol type = "1">
<li>He can make this tree travel into the future by <b>T</b> seconds. That is,
 <b>T</b> seconds will pass.</li>

<li>He can put a robot at the root of the tree, and instruct the robot to walk down the tree with a string of <b>'L'</b> and <b>'R'</b> commands. An <b>'L'</b> command makes the robot go to the left child, and an <b>'R'</b> command makes it go to the right child. It is guaranteed that the commands will be valid. After the robot finishes executing the string of commands, it explodes itself so that the node in which it is present, along with the entire subtree beneath it gets deleted. Assume that this entire operation is instantaneous and doesn't take any time.</li>
</ol>

<p></p>
<p>Hussain will perform <b>Q</b> operations on this tree. After each operation, Alex must tell the number of nodes left in the tree, modulo <b>10<sup>9</sup>+7</b>.</p>

<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>M</b>, the number of testcases. Each testcase is described as follows: </li>
<li>The first line of each testcase contains a single integer, <b>Q</b>, denoting the number of operations.</li>
<li>The next <b>Q</b> lines of the testcase each contain an integer, <b>cmd</b>, at the beginning. <b>cmd</b> equals to 1 or 2.

<ul>
<li>If <b>cmd = 1</b>, then Hussain will make the tree travel into the future. The line will also contain another integer <b>T</b>, denoting the number of seconds that will pass after Hussain runs his time machine.</li>

<li>If <b>cmd = 2</b>, then Hussain will send his robot. You will be given a non-empty string describing the sequence of commands that the robot will follow to reach some existing node, which it then destroys along with the subtree.</li>
</ul>
Please note that in second case the string will be nonempty, so the root will never be deleted.</li>
</ul>

<h3>Output</h3>
<p>For each testcase, output <b>Q</b> lines, the i-th of which contains the number of nodes in the tree after performing the i-th query, modulo <b>10<sup>9</sup>+7</b>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>M</b> ≤ 20 </li>
<li>1 ≤ <b>Q</b> ≤ 3 * 10<sup>5</sup></li>
<li>For each query where <b>cmd = 1</b>: 1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>For each query where <b>cmd = 2</b>: the string of commands will consist only of the characters <b>'L'</b> and <b>'R'</b>.</li>
<li>It is guaranteed that the commands will be valid, and the robot will always land on an existing node. In particular, if the command asks the robot to go to the left (or right) child, then there will be a left (or right) child.</li>
<li>The sum of lengths of strings in the second type of command, in each testfile will not exceed 10<sup>6</sup></li>
<li>The sum of time shift in each testfile will not exceed 10<sup>6</sup></li>
<li>The sum of commands in each testfile will not exceed 10<sup>6</sup></li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
2
6
1 1
2 L
1 1
2 R
1 1
1 1
3
1 3
2 LR
2 RRR

<b>Output:</b>
3
2
5
2
5
11
15
12
11
</pre>

<h3>Explanation</h3>
<p>We will explain the first testcase. At the beginning, there is just the root, and the tree is as follows:</p>

<p></p>
<img src="https://puu.sh/vWPJG/7de2e400bf.png" /> 
<p></p>

<p>Then, Hussain time travels forward by 1 second, and so after the first operation, the tree looks like this:</p>
<p></p>
<img src="https://puu.sh/vWPqf/9a0cce7f8e.png" /> 
<p></p>

<p>The next operation deletes the node 2. So, after that, the tree looks like:</p>
<p></p>
<img src="https://puu.sh/vWPGs/33f517cb10.png" /> 
<p></p>

<p>Hussain time travels again by 1 second, and after that, the tree looks like this:</p>
<p></p>
<img src="https://puu.sh/vWQ4T/58b136870c.png" /> 
<p></p>

<p>In the next operation, node 3 is exploded, along with both its children. Hence after that, the tree looks like:</p>
<p></p>
<img src="https://puu.sh/vWPI1/3bd4e86b29.png" /> 
<p></p>

<p>One more second is time travelled, and the tree looks like:</p>
<p></p>
<img src="https://puu.sh/vWPce/532d9150aa.png" /> 
<p></p>

<p>One more second is time travelled, and the tree looks like:</p>
<p></p>
<img src="https://puu.sh/vWQ72/a0f6b685eb.png" /> 
<p></p>

<p>You can count the number of nodes left in the tree after each operation, and they form the output, which is 3, 2, 5, 2, 5, 11.</p>