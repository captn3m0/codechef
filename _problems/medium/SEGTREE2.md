---
{"category_name":"medium","problem_code":"SEGTREE2","problem_name":"Segment Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":null,"date_added":"23-05-2016","tags":{"0":"xcwgf666"},"time":{"view_start_date":1468063200,"submit_start_date":1468063200,"visible_start_date":1468063200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/mandarin/SEGTREE2.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/russian/SEGTREE2.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/vietnamese/SEGTREE2.pdf">Vietnamese</a> as well.</h3>


<p>The segment tree is a data structure that is capable of processing different queries on the array in an efficient way.</p>

<p>A segment tree is usually created with the following routine.</p>

<pre><tt>createTree(left, right):
    currentNode = new node()
    currentNode->left = left
    currentNode->right = right
    currentNode->tag = 0
    if (left < right):
        middle = (left + right) / 2
        currentNode->leftSon = createTree(left, middle)
        currentNode->rightSon = createTree(middle + 1, right)
    return currentNode
</tt>
</pre>       
<p></p>
<p>The routine is called as:</p>
		
<pre><tt>    root = init(1, N)</tt>
</pre>
<p></p>
            
<p>Consider the following segment tree operations:</p>
<pre><tt>changeSegtree(currentNode, left, right):
   currentNode->tag = 1

   if (left == currentNode->left) and (right == currentNode->right)
       return

   newRight = min(right, currentNode->leftSon->right)
   if (left <= newRight):
       changeSegtree(currentNode->leftSon, left, newRight)

   newLeft = max(left, currentNode->rightSon->left)
   if (newLeft <= right):
       changeSegtree(currentNode->rightSon, newLeft, right)

                
change(left, right):
    changeSegtree(root, left, right)</tt>
</pre>
<p></p>

<p>Finally, an in-order traversal of the tree can be done with the following routine:</p>

<pre><tt>traverse(currentNode):
    if (currentNode->leftSon != NULL)
        traverse(currentNode->leftSon)
    print currentNode->tag
    if (currentNode->rightSon != NULL)
        traverse(currentNode->rightSon)


traverse(root)</tt>
</pre>
<p></p>

<p>You are given the value of <b>N</b>, denoting the length of the array on which the segment tree is built on (i.e. the second parameter to the init routine). You are also given <b>M</b> integers <b>T<sub>1</sub></b>, <b>T<sub>2</sub></b>, ..., <b>T<sub>M</sub></b>. Here, <b>M</b> is the number of nodes in the segment tree and you'll have calculate it by yourself.</p>

<p>Your task is to find the minimum number of <b>non-overlapping</b> segments, so that after calling the <b>change</b> routine for each of these segments successively, on a newly created segment tree, the <b>traverse</b> routine will output <b>T<sub>1</sub></b>, <b>T<sub>2</sub></b>, ..., <b>T<sub>M</sub></b>, or state that such a set of segments doesn't exist.</p>

<p>Two segments <b>(l<sub>1</sub>,r<sub>1</sub>)</b> and <b>(l<sub>2</sub>,r<sub>2</sub>)</b> are considered <b>overlapping</b> if there is some <b>i</b> such that <b>l<sub>1</sub> ≤ i ≤ r<sub>1</sub></b> and <b>l<sub>2</sub> ≤ i ≤ r<sub>2</sub></b>.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains a single integer <b>N</b> denoting the length of segment tree range.</p>

<p>The second line contains <b>M</b> space-separated integers <b>T<sub>1</sub></b>, <b>T<sub>2</sub></b>, ..., <b>T<sub>M</sub></b> denoting what the tags of the segment tree's nodes should be, in in-order traversal. Here, <b>M</b> is the number of nodes in the segment tree.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the minimum number of segments to modify. In case it's impossible to achieve the given configuration of tags, output <b>-1</b>.
</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5 × 10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>Sum of N</b> ≤ <b>5 × 10<sup>5</sup></b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
2
1 1 1
2
1 0 1</tt>

<b>Output:</b>
<tt>2
-1</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> We can call <b>change(1, 1)</b> and <b>change(2, 2)</b>.</p>

<p><b>Example case 2.</b> There is no set of segments that would give the tree with such configuration of tags.</p>