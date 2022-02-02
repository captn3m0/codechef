---
{"category_name":"hard","problem_code":"BIGTREE","problem_name":"Big Search Trees","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":null,"date_added":"7-06-2016","tags":{"0":"kevinsogo"},"time":{"view_start_date":1468063200,"submit_start_date":1468063200,"visible_start_date":1468063200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/mandarin/BIGTREE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/russian/BIGTREE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/vietnamese/BIGTREE.pdf">Vietnamese</a> as well.</h3>
<p>There are all kinds of trees in Chef's garden. There are black sapote trees. There are big santol trees. And of course, there are binary search trees.</p>
<p>Chef's <b>binary search trees</b> are grown in a very specific way. Binary search trees are grown by inserting <b>nodes</b> into it. The first inserted node is called the <b>root</b>. Unlike most of Chef's other trees, binary search trees are grown downwards, and the root is at the top of the tree.</p>
<p>Each node is connected by <b>edges</b> to at most two other nodes below it, called its <b>left child</b> and <b>right child</b>. These can be "null", meaning there are no such children. Finally, each node also has a number on it, called its <b>label</b>.</p>
<p>To grow a binary search tree, you insert a new node to it. The exact rules for inserting a new node are specified by the following pseudocode:</p>
<pre><code>def insert(x, y)
    if x == null
        return y

    if y.label &lt; x.label
        x.left  = insert(x.left,  y)
    else
        x.right = insert(x.right, y)

    return x
</code></pre><p>To insert a new node <rr>y</rr> to the tree with root <tt>x</tt>, simply call <tt>insert(x, y)</tt>. The value returned is the root of the new tree.</p>
<p>The following is an example of a binary search tree:</p>
<!-- TODO image --><!-- TODO image --><pre><code>  3
 / \
1   5
     \
      7
</code></pre><p>The root of this tree has label <b>3</b>.</p>
<p>After inserting a new node with a label of <b>3</b>, the binary search tree becomes:</p>
<!-- TODO image --><!-- TODO image --><pre><code>  3
 / \
1   5
   / \
  3   7
</code></pre><p>The <b>depth</b> of a node is the number of edges in the path from that node to the root. For example, the node with label <b>7</b> above has a depth of <b>2</b>, while the node with label <b>1</b> has a depth of <b>1</b>.</p>
<p>Chef has a total of <b>T</b> binary search trees in his garden. Each tree has four numbers associated with it: <b>a</b>, <b>b</b>, <b>m</b> and <b>N</b>. This means that the tree has a total of <b>N</b> nodes, and the <b>k<sup>th</sup></b> inserted node has label <b>(a + bk) mod m</b>. So the root, being the first inserted node, has label <b>(a + b) mod m</b>.</p>
<p>For each of Chef's binary search trees, can you determine the depth of the node that was inserted last?</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of trees. The description of <b>T</b> trees follows.</p>
<p>Each test case consists of a single line containing four space separated integers <b>a</b>, <b>b</b>, <b>m</b> and <b>N</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing a single integer, denoting the depth of the node that was inserted last in the binary search tree.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5×10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>16</sup></b></li>
<li><b>0</b> ≤ <b>a</b>, <b>b</b> &lt; <b>m</b> ≤ <b>10<sup>8</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>5
1 2 8 1
1 2 8 2
1 2 8 3
1 2 8 4
1 2 8 5
</tt>
<b>Output:</b>
<tt>0
1
2
1
2</tt>
</pre><h3>Explanation</h3>
<p>The sample input is illustrated by the image above.</p>
