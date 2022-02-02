---
{"category_name":"medium","problem_code":"TRANSFIG","problem_name":"Transfiguring Trees","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pragrame","problem_tester":"tuananh93","date_added":"7-06-2013","tags":{"0":"cook35","1":"medium","2":"pragrame","3":"tree"},"editorial_url":"http://discuss.codechef.com/problems/TRANSFIG","time":{"view_start_date":1372012200,"submit_start_date":1372012200,"visible_start_date":1414769400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Hermione has come home for the holidays after a grueling first year at Hogwarts. She then picks up a Muggle book on "Graph Theory" and starts reading about <b>rooted K-ary trees</b>: Trees that are rooted and in which each node has at most <b>K</b> children. Since Transfiguration is her favorite subject at Hogwarts, she excitedly starts inventing a spell to Transfigure some such trees into others.
</p>
<p>
After a while, she has succeeded in her spell. However, she notices something strange about the transfigured tree. Suppose she started with the tree <b>T</b>, and transfigured it into tree <b>T'</b>. Then, she found that the preorder traversal of <b>T</b> was the same as the preorder traversal of <b>T'</b>, and that the postorder traversal of <b>T</b> was also the same as the postorder traversal of <b>T'</b>.
</p>
<p>
She then realizes that her spell is capable of transfiguring tree <b>T</b> into another tree <b>T'</b> only if the preorder and postorder traversals of both are the same. She thus wonders, given a particular permutation of nodes <b>P1</b> and another permutation of nodes <b>P2</b>, along with the value of <b>K</b>, how many rooted <b>K</b>-ary trees <b>T</b> are there that the preorder traversal of <b>T</b> is <b>P1</b>, and the postorder traversal of <b>T</b> is <b>P2</b>.
</p>
<p>
We give the explicit pseudocode of the preorder and postorder traversals of rooted <b>K</b>-ary trees:</p>
<pre>
<code>
class node
	int label;
	node children[K];
//children[i] is "null" if the i'th child is not present

void preorder(node subroot)
	output subroot.label;
	for(int i = 0; i &lt; K; i++)
		if(subroot.children[i] != null)
			preorder(subroot.children[i]);

void postorder(node subroot)
	for(int i = 0; i &lt; K; i++)
		if(subroot.children[i] != null)
			postorder(subroot.children[i]);
	output subroot.label;
</code>
</pre>
<p>
Two rooted <b>K</b>-ary trees <b>T1</b> and <b>T2</b> are considered different if there is some node <b>n</b>, such that the <b>children[]</b> array of node <b>n</b> is different in <b>T1</b> and in <b>T2</b>.
</p>
<p><pre>
Some examples of differences:
K=2.
<code>
   1 : (1.children = [2, 3])
  / \
 2   3
</code>
is different from
<code>
   1 : (1.children = [3, 2])
  / \
 3   2
</code>

Also,
K=2.
<code>
   1 : (1.children = [null, 2])
    \
     2
</code>
is different from
<code>
   1 : (1.children = [2, null])
  /
 2
</code>
is different from
<code>
   2
    \
     1 : (1.children = [null, null], 2.children = [null, 1])
</code>
</pre></p>
<h3>Input</h3>
<p>
The first line contains <b>T</b>, the number of test-cases. <br /><br />
Each test-case, begins with a line consisting of two integers <b>N</b> and <b>K</b>, <b>N</b> is the number of nodes of the tree, and <b>K</b> is the maximum number of children of each node. <br /><br />
This is followed by a line containing a <b>permutation of 1 to N</b>, the supposed preorder traversal. <br /><br />
This is followed by another line containing a <b>permutation of 1 to N</b>, the supposed postorder traversal.
</p>
<h3>Output</h3>
<p>
For each testcase, output the possible number of rooted <b>K</b>-ary trees having the first permutation as its preorder traversal and the second permutation as its postorder traversal. Since the answer can be large, output the answer modulo <b>1000000007</b> (<b>10<sup>9</sup> + 7</b>).
</p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>5</b> </li>
<li> <b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> </li>
<li> <b>1</b> ≤ <b>K</b> &lt; <b>N</b> </li>
<li> Both lines will contain permutations of <b>1</b> to <b>N</b> </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
2 2
1 2
2 1
4 2
1 2 3 4
2 3 4 1
3 2
2 1 3
1 3 2
4 3
1 3 2 4
2 1 3 4

<b>Output:</b>
2
0
1
0
</pre><h3>Explanation</h3>
<p>
The first case has two possibilities:</p>
<pre>
<code>
  1
 /
2
</code>
and
<code>
  1
   \
    2
</code>
</pre>
<p>
The second case gives us a tree where the root 1 has 2, 3 and 4 as its children. Since <b>K = 2</b>, this violates the condition that each node has <b>atmost K children</b>.
</p>
<p>
The fourth case is impossible for any tree to have the given preorder and postorder traversals.
</p>
