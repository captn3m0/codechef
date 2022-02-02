---
{"category_name":"medium","problem_code":"KOL16L","problem_name":"Optimal BST Revisited","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"26-12-2016","tags":{"0":"admin2"},"time":{"view_start_date":1482831600,"submit_start_date":1482831600,"visible_start_date":1482831600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
A rooted binary tree is a rooted tree such that each node has atmost 2 children. A Binary Search Tree (BST) is a rooted binary tree, which has values stored in each of its nodes. We are interested only in distinct values. A BST has to satisfy the property that, for every node, its value must be greater than the value of every node on its left sub-tree, if it exists. Also, for every node, its value must be lesser than the value of every node on its right sub-tree, if it exists.
</p>

<p>Thunk is bored with the classical problem of finding an optimal BST. He decides to spice it up, and changes the cost function. The problem he is considering is as follows:
Given a BST with <b>N</b> nodes, called <b>T</b>, which store the values <b>{1,2,..,N}</b>, and a sequence of Searches <b>S = (s<sub>1</sub>, s<sub>2</sub>, ..., s<sub>m</sub>)</b>, he puts his finger on the root of <b>T</b>, and then traces the path to the node containing <b>s<sub>1</sub></b>, and then from there, to the node containing <b>s<sub>2</sub></b>, ..., and he finally traces the path from <b>s<sub>m-1</sub></b> to <b>s<sub>m</sub></b>. Note that during this process, he might have passed through, or even searched for the same element/node multiple times, if the Search sequence was so given. And he defines the <b>Cost</b> to be the total distance (or the number of edges) that he has passed through. 
</p>

<p>Formally, <b>Cost(T,S) = Depth(s<sub>1</sub>) + Distance(s<sub>1</sub>, s<sub>2</sub>) + Distance(s<sub>2</sub>, s<sub>3</sub>) + ... + Distance(s<sub>m-1</sub>, s<sub>m</sub>)</b>.
</p>

<p><b>Depth(u)</b> is defined to be the number of edges on the unique path from the root of the BST to the node conatining the value <b>u</b>.

<b>Distance(u,v)</b> is defined to be the number of edges on the unique path from the node containing the value <b>u</b> to the node containing the value <b>v</b>.
</p>

<p>Thunk has to hurry to finish his The Art of Competitive Programming series of books, and so doesn't want to waste too much time on this. So, given the sequence of Searches, <b>S = (s<sub>1</sub>, s<sub>2</sub>, ..., s<sub>m</sub>)</b>, help him find the minimum <b>Cost</b>, over all valid BSTs on <b>{1,2,..,N}</b>. That is, find the minimum of <b>Cost(T,S)</b>, over all valid <b>T</b>s.
</p>


<h3>Input</h3>
<p>The first line contains two integers <b>N, M</b>, denoting the number of nodes to be present in the BST, and the length of the search sequence <b>S</b>.</p>
<p>The next line contains <b>M</b> integers ,separated by single spaces: <b>s<sub>1</sub>, s<sub>2</sub>, .., s<sub>M</sub></b>, denoting search sequence <b>S</b>.</p>


<h3>Output</h3>
<p>Output a single line containing the answer, which is the minimum Cost over all valid BSTs.</p>

<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N ≤ 500</b></li>
<li><b>1 ≤ M ≤ 10<sup>6</sup></b></li>
<li><b>1 ≤ S<sub>i</sub> ≤ N</b></li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
<tt>3 5
1 3 2 1 2</tt>
<b>Output:</b>
<tt>5</tt>
</pre>

<h3>Explanation</h3>
For <b>N</b> = 3, there are 5 valid BSTs possible:

<pre>
<b>T<sub>1</sub></b>:
       2
      /  \
    1    3



<b>T<sub>2</sub></b>:
    1
      \
       2
         \
          3



<b>T<sub>3</sub></b>:
        3
       /
    2
   /
 1


<b>T<sub>4</sub></b>:
       1
         \
          3
         /
       2   



<b>T<sub>5</sub></b>:
        3
       /
     1
       \
         2

<b>S = (1, 3, 2, 1, 2)</b>

<b>Cost(T<sub>1</sub>, S) = Depth(1) + Distance(1, 3) + Distance(3, 2) + Distance(2, 1) + Distance(1, 2)
                     = 1 + 2 + 1 + 1 + 1 = 6

Cost(T<sub>2</sub>, S) = Depth(1) + Distance(1, 3) + Distance(3, 2) + Distance(2, 1) + Distance(1, 2)
                     = 0 + 2 + 1 + 1 + 1 = 5

Cost(T<sub>3</sub>, S) = Depth(1) + Distance(1, 3) + Distance(3, 2) + Distance(2, 1) + Distance(1, 2)
                     = 2 + 2 + 1 + 1 + 1 = 7

Cost(T<sub>4</sub>, S) = Depth(1) + Distance(1, 3) + Distance(3, 2) + Distance(2, 1) + Distance(1, 2)
                     = 0 + 1 + 1 + 2 + 2 = 6

Cost(T<sub>5</sub>, S) = Depth(1) + Distance(1, 3) + Distance(3, 2) + Distance(2, 1) + Distance(1, 2)
                     = 1 + 1 + 2 + 1 + 1 = 6</b>
</pre>

We see that the minimum <b>Cost</b> is attained by <b>T<sub>2</sub></b>, and it is <b>5</b>. Hence the answer is <b>5</b>.
