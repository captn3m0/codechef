---
category_name: medium
problem_code: SEGTREE2
problem_name: 'Segment Tree'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: null
date_added: 23-05-2016
tags:
    - xcwgf666
time:
    view_start_date: 1468063200
    submit_start_date: 1468063200
    visible_start_date: 1468063200
    end_date: 1735669800
    current: 1493557974
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL16/mandarin/SEGTREE2.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL16/russian/SEGTREE2.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL16/vietnamese/SEGTREE2.pdf) as well.

The segment tree is a data structure that is capable of processing different queries on the array in an efficient way.

A segment tree is usually created with the following routine.

<pre><tt>createTree(left, right):
    currentNode = new node()
    currentNode->left = left
    currentNode->right = right
    currentNode->tag = 0
    if (left leftSon = createTree(left, middle)
        currentNode->rightSon = createTree(middle + 1, right)
    return currentNode
</tt>
</pre>The routine is called as:

 ```
<tt>    root = init(1, N)</tt>
<pre>Consider the following segment tree operations:

</pre><tt>changeSegtree(currentNode, left, right):
   currentNode->tag = 1

   if (left == currentNode->left) and (right == currentNode->right)
       return

   newRight = min(right, currentNode->leftSon->right)
   if (left leftSon, left, newRight)

   newLeft = max(left, currentNode->rightSon->left)
   if (newLeft rightSon, newLeft, right)

                
change(left, right):
    changeSegtree(root, left, right)</tt>
<pre>Finally, an in-order traversal of the tree can be done with the following routine:

</pre><tt>traverse(currentNode):
    if (currentNode->leftSon != NULL)
        traverse(currentNode->leftSon)
    print currentNode->tag
    if (currentNode->rightSon != NULL)
        traverse(currentNode->rightSon)


traverse(root)</tt>
<pre>You are given the value of **N**, denoting the length of the array on which the segment tree is built on (i.e. the second parameter to the init routine). You are also given **M** integers **T1**, **T2**, ..., **TM**. Here, **M** is the number of nodes in the segment tree and you'll have calculate it by yourself.

Your task is to find the minimum number of **non-overlapping** segments, so that after calling the **change** routine for each of these segments successively, on a newly created segment tree, the **traverse** routine will output **T1**, **T2**, ..., **TM**, or state that such a set of segments doesn't exist.

Two segments **(l1,r1)** and **(l2,r2)** are considered **overlapping** if there is some **i** such that **l1 ≤ i ≤ r1** and **l2 ≤ i ≤ r2**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the length of segment tree range.

The second line contains **M** space-separated integers **T1**, **T2**, ..., **TM** denoting what the tags of the segment tree's nodes should be, in in-order traversal. Here, **M** is the number of nodes in the segment tree.

### Output

For each test case, output a single line containing the minimum number of segments to modify. In case it's impossible to achieve the given configuration of tags, output **-1**.

### Constraints

- **1** ≤ **T** ≤ **5 × 104**
- **1** ≤ **N** ≤ **105**
- **1** ≤ **Sum of N** ≤ **5 × 105**

### Example

</pre><b>Input:</b>
<tt>2
2
1 1 1
2
1 0 1</tt>

<b>Output:</b>
<tt>2
-1</tt>
<pre>### Explanation

**Example case 1.** We can call **change(1, 1)** and **change(2, 2)**.

**Example case 2.** There is no set of segments that would give the tree with such configuration of tags.
