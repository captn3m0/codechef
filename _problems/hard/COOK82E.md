---
category_name: hard
problem_code: COOK82E
problem_name: 'Binary Tree'
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
problem_author: deadwing97
problem_tester: kingofnumbers
date_added: 21-05-2017
tags:
    - deadwing97
time:
    view_start_date: 1495391400
    submit_start_date: 1495391400
    visible_start_date: 1495391400
    end_date: 1735669800
    current: 1497589508
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK82/mandarin/COOK82E.pdf), [russian](http://www.codechef.com/download/translated/COOK82/russian/COOK82E.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK82/vietnamese/COOK82E.pdf) as well.

Hussain met his friend Alex finally for the first time, because Alex travelled to USA. Hussain decided to treat him to a problem. Hussain challenged Alex to solve this task :

Hussain has a binary tree, initially consisting of 1 node (called the root), and it has label 1. A binary tree is a tree where the number of children of any node is at most 2.

This tree has a very nice property: At the end of each second, each leaf (a node with no children) labelled **x** will produce 2 children. The new left child will be labelled **2\*x** and the new right child will be labelled **2\*x+1**.

If a node has only one child, it just reproduces the other one. (The already existing child isn't affected).

Hussain can perform 2 operations on this tree :

1. He can make this tree travel into the future by **T** seconds. That is, **T** seconds will pass.
2. He can put a robot at the root of the tree, and instruct the robot to walk down the tree with a string of **'L'** and **'R'** commands. An **'L'** command makes the robot go to the left child, and an **'R'** command makes it go to the right child. It is guaranteed that the commands will be valid. After the robot finishes executing the string of commands, it explodes itself so that the node in which it is present, along with the entire subtree beneath it gets deleted. Assume that this entire operation is instantaneous and doesn't take any time.

Hussain will perform **Q** operations on this tree. After each operation, Alex must tell the number of nodes left in the tree, modulo **109+7**.

### Input

- The first line contains a single integer, **M**, the number of testcases. Each testcase is described as follows:
- The first line of each testcase contains a single integer, **Q**, denoting the number of operations.
- The next **Q** lines of the testcase each contain an integer, **cmd**, at the beginning. **cmd** equals to 1 or 2. 
  - If **cmd = 1**, then Hussain will make the tree travel into the future. The line will also contain another integer **T**, denoting the number of seconds that will pass after Hussain runs his time machine.
  - If **cmd = 2**, then Hussain will send his robot. You will be given a non-empty string describing the sequence of commands that the robot will follow to reach some existing node, which it then destroys along with the subtree.
  
  Please note that in second case the string will be nonempty, so the root will never be deleted.

### Output

For each testcase, output **Q** lines, the i-th of which contains the number of nodes in the tree after performing the i-th query, modulo **109+7**.

### Constraints

- 1 ≤ **M** ≤ 20
- 1 ≤ **Q** ≤ 3 \* 105
- For each query where **cmd = 1**: 1 ≤ **T** ≤ 105
- For each query where **cmd = 2**: the string of commands will consist only of the characters **'L'** and **'R'**.
- It is guaranteed that the commands will be valid, and the robot will always land on an existing node. In particular, if the command asks the robot to go to the left (or right) child, then there will be a left (or right) child.
- The sum of lengths of strings in the second type of command, in each testfile will not exceed 106
- The sum of time shift in each testfile will not exceed 106
- The sum of commands in each testfile will not exceed 106

### Example

<pre><b>Input:</b>
2
6
1 1
2 L
1 1
2 R
1 1
1 1
3
1 3
2 LR
2 RRR

<b>Output:</b>
3
2
5
2
5
11
15
12
11
</pre>### Explanation

We will explain the first testcase. At the beginning, there is just the root, and the tree is as follows:

![](https://puu.sh/vWPJG/7de2e400bf.png)Then, Hussain time travels forward by 1 second, and so after the first operation, the tree looks like this:

![](https://puu.sh/vWPqf/9a0cce7f8e.png)The next operation deletes the node 2. So, after that, the tree looks like:

![](https://puu.sh/vWPGs/33f517cb10.png)Hussain time travels again by 1 second, and after that, the tree looks like this:

![](https://puu.sh/vWQ4T/58b136870c.png)In the next operation, node 3 is exploded, along with both its children. Hence after that, the tree looks like:

![](https://puu.sh/vWPI1/3bd4e86b29.png)One more second is time travelled, and the tree looks like:

![](https://puu.sh/vWPce/532d9150aa.png)One more second is time travelled, and the tree looks like:

![](https://puu.sh/vWQ72/a0f6b685eb.png)You can count the number of nodes left in the tree after each operation, and they form the output, which is 3, 2, 5, 2, 5, 11.
