---
{"category_name":"school","problem_code":"BSTOPS","problem_name":"BST Operations","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anukul","problem_tester":null,"date_added":"1-04-2017","tags":{"0":"anukul"},"time":{"view_start_date":1554229800,"submit_start_date":1554229800,"visible_start_date":1554229800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
	Write a program that processes the following queries on a Binary Search Tree:<br>
	<b>i x</b>: Insert <b>x</b> in the BST<br>
	<b>d x</b>: Delete <b>x</b> from the BST<br>
</p>

<p>
	<h3>Input format</h3>
	<ul>
		<li>Line 1 contains an integer <b>Q</b>, the number of queries</li>
		<li>The next <b>Q</b> lines are of the form <b>i x</b> or <b>d x</b></li>
	</ul>
</p>

<p>
	<h3>Output format</h3>
	<ul>
	<li>For each query, print the position of <b>x</b> in the BST</li>
	<li>If the position of a node is <b>p</b>, the positions of its left and right children are <b>2*p</b> and <b>2*p+1</b> respectively</li>
	<li>Position of the root node is 1</li>
	</ul>
</p>

<p>
	<h3>Test data</h3>
	<ul>
		<li>1 &le; <b>N</b> &le; 10<sup>3</sup></li>
		<li>-10<sup>9</sup> &le; <b>x</b> &le; 10<sup>9</sup></li>
		<li>1 &le; position(<b>x</b>) &le; 2<sup>32</sup> - 1</li>
		<li>It is guaranteed that there will be no duplicates in the BST</li>
	</ul>
</p>

<p>
	<h3>Sample Input</h3>
	<pre><tt>
5
i 1
i 2
i 0
d 2
i 3
	</tt></pre>
</p>

<p>
	<h3>Sample Output</h3>
	<pre><tt>
1
3
2
3
3
	</tt></pre>
</p>

<p>
	<h3>Explanation</h3>
	<pre><tt>
On inserting 1,

1

On inserting 2:

1
 \
  2

On inserting 0:

   1
  / \
 0   2

After deleting 2:

  1
 /
0

On inserting 3:

   1
  / \
 0   3

	</tt></pre>
</p>
