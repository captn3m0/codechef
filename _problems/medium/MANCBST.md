---
{"category_name":"medium","problem_code":"MANCBST","problem_name":"Chef Counts Semi-BSTs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH 3.5","4":"CS2","5":"PAS fpc","6":"PAS gpc","7":"GO","8":"NODEJS","9":"HASK","10":"D","11":"PERL","12":"FORT","13":"ADA","14":"CAML","15":"ICK","16":"BF","17":"ASM","18":"CLPS","19":"ICON","20":"NICE","21":"LUA","22":"BASH","23":"NEM","24":"LISP sbcl","25":"LISP clisp","26":"JS","27":"ERL","28":"kotlin","29":"PERL6","30":"CLOJ","31":"COB","32":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"satyaki3794","problem_tester":null,"date_added":"30-11-2017","tags":{"0":"acm17chn","1":"chn17rol","2":"fft","3":"med","4":"satyaki3794"},"editorial_url":"https://discuss.codechef.com/problems/MANCBST","time":{"view_start_date":1515357000,"submit_start_date":1515357000,"visible_start_date":1515357000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Everyone has heard of binary search trees or BSTs. A BST is a rooted tree, such that the root has atmost two children. The subtree rooted at each of root's children should be valid BSTs. All the values in the left subtree should be smaller than the root and all the values in the right subtree should be larger than the root.</p>

<p>However, there's a new data structure in town called semi-BST. Formally, a semi-BST is a tree with <b>N</b> nodes which satisfies the following conditions:
<ul>
  <li>Each node contains a distinct value.</li>
  <li>The root has at most two children.</li>
  <li>The right subtree of the root (if it exists) is a valid semi-BST.</li>
  <li>The left subtree of the root (if it exists) is any unordered rooted tree. That is, the children of a vertex are not ordered, and hence no concept of left or right child.</li>
  <li> The BST property for the root is maintained, i.e. all the values in the left subtree of the root are lesser than that of the root and all the values in the right subtree of the root are greater than that of the root.</li>
</ul>
</p>

<p>     
<center><img height="250" src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17CHN/MANCBST.png"/></center>
</p>

<p>
For example, let us show that tree shown above is a semi-BST. The root of the tree is 5. All the elements in the left subtree are smaller than 5 and all the elements in the right subtree are greater than 5.
<p>Now, all we need to show is that the right subtree is a valid semi-BST:</p>
<p>We are now considering the subtree rooted at 8, and hence the current root is 8. All the elements in the left subtree are smaller than 8 and all the elements in the right subtree (which doesn't exist) are greater than 8. Hence the subtree rooted at 8 is a valid semi-BST. And hence the entire tree, rooted at 5 is a valid semi-BST.</p>

<p>
Given <b>N</b>, find the number of semi-BSTs having exactly <b>N</b> nodes, and such that all the <b>N</b>  values in the nodes are from {1, 2, ..., <b>N</b>}. Output the answer modulo 663224321. </p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains a single integer <b>N</b> denoting the number of nodes.</li>
</ul></p>

<h3>Output</h3>
<p>
For each test case, print a single line containing one integer — the number of semi-BSTs modulo 663224321.
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100000</li>
<li>1 ≤ <b>N</b> ≤ 100000</li>
</ul>

<h3>Example 1</h3>
<pre><b>Input:</b>
4
1
2
3
4

<b>Output:</b>
1
2
5
18
</pre>
