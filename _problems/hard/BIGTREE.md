---
category_name: hard
problem_code: BIGTREE
problem_name: 'Big Search Trees'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kevinsogo
problem_tester: null
date_added: 7-06-2016
tags:
    - kevinsogo
time:
    view_start_date: 1468063200
    submit_start_date: 1468063200
    visible_start_date: 1468063200
    end_date: 1735669800
    current: 1493556620
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL16/mandarin/BIGTREE.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL16/russian/BIGTREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL16/vietnamese/BIGTREE.pdf) as well.

There are all kinds of trees in Chef's garden. There are black sapote trees. There are big santol trees. And of course, there are binary search trees.

Chef's **binary search trees** are grown in a very specific way. Binary search trees are grown by inserting **nodes** into it. The first inserted node is called the **root**. Unlike most of Chef's other trees, binary search trees are grown downwards, and the root is at the top of the tree.

Each node is connected by **edges** to at most two other nodes below it, called its **left child** and **right child**. These can be "null", meaning there are no such children. Finally, each node also has a number on it, called its **label**.

To grow a binary search tree, you insert a new node to it. The exact rules for inserting a new node are specified by the following pseudocode:

<pre>def insert(x, y)
    if x == null
        return y

    if y.label < x.label
        x.left  = insert(x.left,  y)
    else
        x.right = insert(x.right, y)

    return x

</pre>To insert a new node y to the tree with root x, simply call insert(x, y). The value returned is the root of the new tree.
The following is an example of a binary search tree:

<pre>  3
 / \
1   5
     \
      7

</pre>The root of this tree has label **3**.
After inserting a new node with a label of **3**, the binary search tree becomes:

<pre>  3
 / \
1   5
   / \
  3   7

</pre>The **depth** of a node is the number of edges in the path from that node to the root. For example, the node with label **7** above has a depth of **2**, while the node with label **1** has a depth of **1**.
Chef has a total of **T** binary search trees in his garden. Each tree has four numbers associated with it: **a**, **b**, **m** and **N**. This means that the tree has a total of **N** nodes, and the **kth** inserted node has label **(a + bk) mod m**. So the root, being the first inserted node, has label **(a + b) mod m**.

For each of Chef's binary search trees, can you determine the depth of the node that was inserted last?

### Input

The first line of the input contains an integer **T** denoting the number of trees. The description of **T** trees follows.

Each test case consists of a single line containing four space separated integers **a**, **b**, **m** and **N**.

### Output

For each test case, output a single line containing a single integer, denoting the depth of the node that was inserted last in the binary search tree.

### Constraints

- **1** ≤ **T** ≤ **5×104**
- **1** ≤ **N** ≤ **1016**
- ≤ **a**, **b** < **m** ≤ **108**

### Example

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

</pre>### Explanation
The sample input is illustrated by the image above.
