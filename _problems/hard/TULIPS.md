---
category_name: hard
problem_code: TULIPS
problem_name: 'Tiptoe through the tulips'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: meteora
problem_tester: furko
date_added: 10-02-2016
tags:
    - centroid
    - disjoint
    - hard
    - march16
    - meteora
    - segment
editorial_url: 'http://discuss.codechef.com/problems/TULIPS'
time:
    view_start_date: 1458034200
    submit_start_date: 1458034200
    visible_start_date: 1458034200
    end_date: 1735669800
    current: 1493556888
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH16/mandarin/TULIPS.pdf), [Russian](http://www.codechef.com/download/translated/MARCH16/russian/TULIPS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH16/vietnamese/TULIPS.pdf) as well.

Cherry has discovered the Garden of Magical Tulips while going on a walk. The garden can be described as **N** nodes connected by **N-1** trails. The nodes are numbered from **1** to **N**. Each trail **i** connects two different nodes, **ui** and **vi** and has length **Li**. It is possible to visit all the nodes starting from any node using a sequence of trails.

 Magical tulips like to grow alone, without being disturbed. So, every node has exactly one tulip growing there peacefully and a tulip never withers once it is fully grown. If a fully grown tulip is picked, a new one will grow in the same spot if it is left undisturbed for **X** contiguous days.

Sometimes, when Cherry goes for a walk, she visits the garden to collect some tulips for her beloved Jimma, who is always waiting at the window to see Cherry pass by. The number of tulips she collects on a particular day depends on her mood. She gets bored while walking on long trails, so on day **dj**, Cherry will start at a node **uj** and visit **all the nodes she can reach while taking only the trails whose length does not exceed kj**. She will pick all the fully grown tulips she can find. But in the process, she might visit some nodes which do not have a fully grown tulip yet. These tulips will get upset and grow fully only after **X** days if Cherry doesn't disturb them again before that.

**i.e. if Cherry does not visit that node again before the day **dj+X**, then it will have a fully grown tulip on that day.** On day **d1**, all the nodes have fully grown tulips.

Cherry has never been to school and is not very good at counting, so she always wonders how many tulips she has collected. Please help Cherry figure out the number of tulips she collects for the next **Q** days she visits the garden.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N**. The next **N-1** lines describe the edges. The **i+1th** line contains three space separated integers **ui**, **vi** and **Li**.
- The next line contains two space separated integers **Q** and **X** and is followed by **Q** lines each describing the next **Q** days Cherry visits the garden. The **jth** such line contains three space separated integers **dj**, **uj** and **kj**.

### Output

- For each test case, output **Q** lines.
- The **jth** line of each test case should contain the number of tulips Cherry collects on day **dj**.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N,Q** ≤ **105**
- **1** ≤ **ui**,**vi** ≤ **N**
- **1** ≤ **Li**,**kj** ≤ **108**
- **1** ≤ **d1** ≤ **108**
- **dj-1** < **dj** ≤ **108** for **2** ≤ **j** ≤ **Q**

### Subtasks

- Subtask 1: **X** = **1** (15 points)
- Subtask 2: **1** ≤ **X** ≤ **108** (85 points)

### Example

```
<b>Input:</b>
1
3 
1 2 7
3 1 10
3 4
5 2 8
7 1 20
13 2 3

<b>Output:</b>
2
1
1

```
### Explanation

**Example case 1.** There are **3** queries. The tulips take **4** days to grow fully. In the first query, Cherry will visit nodes **1** and **2**, because the trail **3-1** has length greater than **8**. Both the nodes will have fully grown tulips. After Cherry picks them, the tulips will grow back on day **5+4**, if Cherry doesn't visit them again. So the output is **2**.

 In the second query, Cherry will visit all the trails because all of them have length less than **20**. The tulips at **1,2** haven't grown back yet and now all the tulips will take **4** more days. There is a tulip at **3**. So the output is **1**.

 In the third query, on day **13**, all the tulips have grown back, but Cherry will not use any of the trails because both of them have length greater than **3**. So, she will collect only one tulip - the tulip at **2**.