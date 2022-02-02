---
{"category_name":"easy","problem_code":"TREECAKE","problem_name":"Tree Cake","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"3-04-2016","tags":{"0":"kingofnumbers"},"time":{"view_start_date":1468063200,"submit_start_date":1468063200,"visible_start_date":1468063200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/mandarin/TREECAKE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/russian/TREECAKE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/vietnamese/TREECAKE.pdf">Vietnamese</a> as well.</h3>
<p>Chef is well known for his delicious cakes with various flavors and shapes. One of his famous cakes is in the shape of a rooted binary tree of height <b>H</b>. The rooted binary tree has a very interesting property - for each non leaf node <b>v</b>, the height of the sub-tree rooted at the right child of <b>v</b> is exactly 1 more than that of the sub-tree rooted at the left child of node <b>v</b>. Note that the height of the leaf node of the tree is considered to be one and that of an empty subtree is considered to be zero. You can observe that the above property uniquely determines the rooted tree for a fixed height. So, instead of giving the entire rooted tree, we will just specify its height in the input.</p>
<p>
Chef wants to cut his cake into some vertex-disjoint paths such that each node belongs to exactly one path. He wants your help to find out the minimum number of vertex-disjoint paths that cake be cut into.</p>
<p>
Let us take an example. The picture below describes the tree of height <b>H = 4</b>. Chef can cut this tree into 2 vertex-disjoint paths. These two paths are shown in green and red colors, respectively. This is the minimum number of paths that Chef can cut the cake into.
</p>
<p>
<img src="https://s3.amazonaws.com/codechef_shared/download/upload/SNCKFL16/1.png" height="150" />
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. This is followed by the description of the test cases.</p>
<p>The only line of each test case contains a single integer <b>H</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single integer in a separate line denoting the minimum number of vertex disjoint paths into which cake can be cut. As the answer could be large, output it modulo <b>10<sup>9</sup> + 7</b></p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>H</b> ≤ <b>10<sup>18</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
1
4</tt>

<b>Output:</b>
<tt>1
2</tt>
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The rooted tree will consist of only 1 node. So, Chef can cut the entire cake into 1 vertex-disjoint path consisting of the single node itself. </p>
<p><b>Example case 2.</b> This case is already explained in the problem description.</p>
