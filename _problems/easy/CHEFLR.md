---
{"category_name":"easy","problem_code":"CHEFLR","problem_name":"Chef and Left-Right","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"xcwgf666","date_added":"26-03-2014","tags":{"0":"ad","1":"basic","2":"berezin","3":"sept14","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFLR","time":{"view_start_date":1410773400,"submit_start_date":1410773400,"visible_start_date":1410773400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/CHEFLR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/CHEFLR.pdf">Russian</a>.</h3>
<p>Chef has a nice <i>complete</i> binary tree in his garden. <i>Complete</i> means that each node has <b>exactly two</b> sons, so the tree is infinite. Yesterday he had enumerated the nodes of the tree in such a way: </p>
<ul>
<li>Let's call the nodes' level a number of nodes that occur on the way to this node from the root, including this node. This way, only the root has the level equal to <b>1</b>, while only its two sons has the level equal to <b>2</b>.</li>
<li>Then, let's take all the nodes with the odd level and enumerate them with consecutive odd numbers, starting from the smallest levels and the leftmost nodes, going to the rightmost nodes and the highest levels.</li>
<li>Then, let's take all the nodes with the even level and enumerate them with consecutive even numbers, starting from the smallest levels and the leftmost nodes, going to the rightmost nodes and the highest levels.</li>
<li>For the better understanding there is an example: </li>
</ul>
<pre>
                             1
                        /           \
                  2                   4
                /   \                /       \
             3       5           7        9
            / \      /  \          /  \       /  \
           6  8 10 12      14 16   18 20 
</pre><p>Here you can see the visualization of the process. For example, in odd levels, the root was enumerated first, then, there were enumerated roots' left sons' sons and roots' right sons' sons.</p>
<p>You are given the string of symbols, let's call it <b>S</b>. Each symbol is either <b>l</b> or <b>r</b>. Naturally, this sequence denotes some path from the root, where <b>l</b> means going to the left son and <b>r</b> means going to the right son.</p>
<p>Please, help Chef to determine the number of the last node in this path.</p>
<h3>Input</h3>
<p>The first line contains single integer <b>T</b> number of test cases.</p>
<p>Each of next <b>T</b> lines contain a string <b>S</b> consisting only of the symbols <b>l</b> and <b>r</b>.
</p>
<h3>Output</h3>
<p>Per each line output the number of the last node in the path, described by S, modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>|T|</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>10^5</b></li>
<li>Remember that the tree is infinite, so each path described by appropriate <b>S</b> is a correct one.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
lrl
rll
r
lllr
<b>Output:</b>
10
14
4
13

</pre>
<h3>Explanation</h3>
<p>See the example in the statement for better understanding the samples.</p>
