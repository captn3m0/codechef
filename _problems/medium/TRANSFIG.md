---
category_name: medium
problem_code: TRANSFIG
problem_name: 'Transfiguring Trees'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pragrame
problem_tester: tuananh93
date_added: 7-06-2013
tags:
    - cook35
    - medium
    - pragrame
    - tree
editorial_url: 'http://discuss.codechef.com/problems/TRANSFIG'
time:
    view_start_date: 1372012200
    submit_start_date: 1372012200
    visible_start_date: 1414769400
    end_date: 1735669800
    current: 1493557947
layout: problem
---
All submissions for this problem are available.Hermione has come home for the holidays after a grueling first year at Hogwarts. She then picks up a Muggle book on "Graph Theory" and starts reading about **rooted K-ary trees**: Trees that are rooted and in which each node has at most **K** children. Since Transfiguration is her favorite subject at Hogwarts, she excitedly starts inventing a spell to Transfigure some such trees into others.

After a while, she has succeeded in her spell. However, she notices something strange about the transfigured tree. Suppose she started with the tree **T**, and transfigured it into tree **T'**. Then, she found that the preorder traversal of **T** was the same as the preorder traversal of **T'**, and that the postorder traversal of **T** was also the same as the postorder traversal of **T'**.

She then realizes that her spell is capable of transfiguring tree **T** into another tree **T'** only if the preorder and postorder traversals of both are the same. She thus wonders, given a particular permutation of nodes **P1** and another permutation of nodes **P2**, along with the value of **K**, how many rooted **K**-ary trees **T** are there that the preorder traversal of **T** is **P1**, and the postorder traversal of **T** is **P2**.

We give the explicit pseudocode of the preorder and postorder traversals of rooted **K**-ary trees:


<pre>
class node
	int label;
	node children[K];
//children[i] is "null" if the i'th child is not present

void preorder(node subroot)
	output subroot.label;
	for(int i = 0; i < K; i++)
		if(subroot.children[i] != null)
			preorder(subroot.children[i]);

void postorder(node subroot)
	for(int i = 0; i < K; i++)
		if(subroot.children[i] != null)
			postorder(subroot.children[i]);
	output subroot.label;

</pre>

Two rooted **K**-ary trees **T1** and **T2** are considered different if there is some node **n**, such that the **children\[\]** array of node **n** is different in **T1** and in **T2**.

<pre>
Some examples of differences:
K=2.
</pre>
   1 : (1.children = [2, 3])
  / \
 2   3

<pre>is different from
</pre>
   1 : (1.children = [3, 2])
  / \
 3   2

<pre>
Also,
K=2.
</pre>
   1 : (1.children = [null, 2])
    \
     2

<pre>is different from
</pre>
   1 : (1.children = [2, null])
  /
 2

<pre>is different from
</pre>
   2
    \
     1 : (1.children = [null, null], 2.children = [null, 1])

<pre></pre>
### Input

The first line contains **T**, the number of test-cases. 

Each test-case, begins with a line consisting of two integers **N** and **K**, **N** is the number of nodes of the tree, and **K** is the maximum number of children of each node. 

This is followed by a line containing a **permutation of 1 to N**, the supposed preorder traversal. 

This is followed by another line containing a **permutation of 1 to N**, the supposed postorder traversal.

### Output

For each testcase, output the possible number of rooted **K**-ary trees having the first permutation as its preorder traversal and the second permutation as its postorder traversal. Since the answer can be large, output the answer modulo **1000000007** (**109 + 7**).

### Constraints

- **1** ≤ **T** ≤ **5**
- **2** ≤ **N** ≤ **105**
- **1** ≤ **K** < **N**
- Both lines will contain permutations of **1** to **N**

### Example

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
</pre>
### Explanation

The first case has two possibilities:


<pre>
  1
 /
2

</pre>and
<pre>
  1
   \
    2

</pre>

The second case gives us a tree where the root 1 has 2, 3 and 4 as its children. Since **K = 2**, this violates the condition that each node has **atmost K children**.

The fourth case is impossible for any tree to have the given preorder and postorder traversals.
