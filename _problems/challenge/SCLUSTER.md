---
category_name: challenge
problem_code: SCLUSTER
problem_name: 'Social Cluster'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: nssprogrammer
problem_tester: laycurse
date_added: 17-03-2015
tags:
    - annealing
    - aug15
    - challenge
    - facility
    - heuristic
    - nssprogrammer
    - steinertree
    - stimulated
editorial_url: 'http://discuss.codechef.com/problems/SCLUSTER'
time:
    view_start_date: 1439803800
    submit_start_date: 1439803800
    visible_start_date: 1439803800
    end_date: 1735669800
    current: 1525454422
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/AUG15/mandarin/SCLUSTER.pdf) and [Russian](http://www.codechef.com/download/translated/AUG15/russian/SCLUSTER.pdf).

This problem deals with the effective formation of a cluster among **K** individuals living in a society. A society can be represented as a **N × N** grid. Individuals are located at certain points on the grid. Each individual's social interaction is measured by a positive integer, called **interaction power** denoted by **Ii**. The **dissimilarity** between two individuals is defined as the absolute difference between their interaction powers. Less the absolute difference between interaction powers of two individuals, more the probability that they will interact with each other.

Now your task is to form a single cluster of individuals by displacing some individuals from their original positions. Formally, a cluster means a connected component. An individual at point **(xi, yi)** is said to be **adjacent** to another individual at point **(xj, yj)** if and only if **|xi − xj| ≤ 1** and **|yi − yj| ≤ 1**.

**What needs to be optimized ?**

The cost of clustering is defined as **Score = 1000×A + 10×B** , where **A** and **B** are two variables. **The task is to minimize this cost.**

We define **A** first. Suppose **P** be the set of individuals on the grid and **|P| = K**. In order to create the cluster, we may need to displace some individuals from their original positions on the grid. Let the individual **pi** be displaced by a Manhattan distance **di** in order to become a part of the cluster.
Now **di = |xi(final) − xi(initial)| + |yi(final) − yi(initial)|**.
Here **(xi(initial), yi(initial))** is the initial position of individual **pi** and **(xi(final), yi(final))** is the position of the same individual after becoming a part of the cluster.
Now **A = Σ (di / Ii)**  where **i = 1 to K**.
Here **I**i = Interaction power of individual **pi**.

The variable **B** is defined after the cluster is formed.
**B = Σ ( si / ni )** , where  **i = 1 to K**.
**si = Σ (|Ij − Ii| )**, where **{ pj ∈ P | pj is adjacent to pi }**.
**ni** = Number of individuals adjacent to **pi**.

### Input

The first line of input contains an integer **T**, denoting the number of test cases. Then **T** test cases follow.

The first line of each test case contains two space separated integers **N** and **K**, denoting the grid size and the number of individuals, respectively. Then **N** lines follow. The **ith** of these lines contains **N** space separated integers, denoting the information regarding the **ith** row. The **jth** value of **ith** row contains the index value of an individual at **(i, j)** cell. The index value, of course, ranges from **1** to **K**. Empty cells have zero value.

Then **K** lines follow. The **ith** of these lines contains the value of **Ii**, the interaction power of **ith** individual.

### Output

 For each test case, print **N** lines, each line containing **N** space separated integers. It represents the **N × N** grid containing the cluster.

### Constraints

- **1** ≤ **T** ≤ **60**
- **2** ≤ **N** ≤ **60**
- **2** ≤ **K** ≤ **2000**
- **1** ≤ **Ii** ≤ **25**

### Example

<pre><b>Input:</b>
1
5 5
0 0 0 1 0
0 0 0 0 0
2 0 5 0 4
0 0 0 0 0
0 3 0 0 0
2
3
2
3
3

<b>Output:</b>
0 0 0 0 0
0 0 1 0 0
0 2 5 4 0
0 0 3 0 0
0 0 0 0 0
</pre>
### Explanation

<pre>Calculation of value <b>A</b> :
<b>d<sub>1</sub></b> = 2        <b>I<sub>1</sub></b> = 2
<b>d<sub>2</sub></b> = 1        <b>I<sub>2</sub></b> = 3
<b>d<sub>3</sub></b> = 2        <b>I<sub>3</sub></b> = 2
<b>d<sub>4</sub></b> = 1        <b>I<sub>4</sub></b> = 3
<b>d<sub>5</sub></b> = 0        <b>I<sub>5</sub></b> = 3
<b>A</b>  =   <b>d<sub>1</sub></b>/ <b>I<sub>1</sub></b> + <b>d<sub>2</sub></b>/<b>I<sub>2</sub></b> + <b>d<sub>3</sub></b>/<b>I<sub>3</sub></b> + <b>d<sub>4</sub></b>/<b>I<sub>4</sub></b> + <b>d<sub>5</sub></b>/<b>I<sub>5</sub></b>
    = <b>1</b> + <b>0.333...</b> + <b>1</b> + <b>0.333...</b> + <b>0</b>
    = <b>2.666...</b> <br></br>   
Calculation of value <b>B</b> :
(Number of individuals adjacent to <b>1</b>) = <b>n<sub>1</sub></b> = <b>3</b>  ( 2 , 5 , 4 )
<b>s<sub>1</sub></b> = <b>|I<sub>1</sub> − I<sub>2</sub>|</b> + <b>|I<sub>1</sub> − I<sub>5</sub>|</b> + <b>|I<sub>1</sub> − I<sub>4</sub>|</b>
    = <b>1</b> + <b>1</b> + <b>1</b>
    = <b>3</b>
(Number of individuals adjacent to <b>2</b>) = <b>n<sub>2</sub></b> = <b>3</b>  ( 1 , 5 , 3 )
<b>s<sub>2</sub></b> = <b>|I<sub>2</sub> − I<sub>1</sub>|</b> + <b>|I<sub>2</sub> − I<sub>5</sub>|</b> + <b>|I<sub>2</sub> − I<sub>3</sub>|</b>
    = <b>1</b> + <b>0</b> + <b>1</b>
    = <b>2</b>
In a similar fashion ,
<b>n<sub>3</sub></b> = <b>3</b>, <b>n<sub>4</sub></b> = <b>3</b>, <b>n<sub>5</sub></b> = <b>4</b>,
<b>s<sub>3</sub></b> = <b>3</b>, <b>s<sub>4</sub></b> = <b>2</b>, <b>s<sub>5</sub></b> = <b>2</b>,
<b>B</b>  =   <b>s<sub>1</sub></b>/<b>n<sub>1</sub></b> + <b>s<sub>2</sub></b>/<b>n<sub>2</sub></b> + <b>s<sub>3</sub></b>/<b>n<sub>3</sub></b> + <b>s<sub>4</sub></b>/<b>n<sub>4</sub></b> + <b>s<sub>5</sub></b>/<b>n<sub>5</sub></b>
     =  <b>1</b> + <b>0.666...</b> + <b>1</b> + <b>0.666...</b> + <b>0.5</b>
     =  <b>3.833...</b>

Now <b>Cost</b> = <b>1000×A</b> + <b>10×B</b>
                 = <b>2666.66...</b> + <b>38.33...</b>
                 = <b>2705</b>
								
A different configuration of the cluster may result in a different cost. The task is to minimize this clustering cost.
</pre>
### Test generation method and scoring

All test file has **T = 60**. Then each test case is generated as follows.

An integer **x** is chosen from **\[2, 60\]** uniformly and randomly at first. Then **N** is chosen from **\[x, 60\]** uniformly and randomly. Next, an integer **y** is chosen from **\[2, min(2000, N×N)\]**, and **K** is chosen from **\[2, y\]** uniformly and randomly. Starting at empty grid, choose an empty cell uniformly and randomly, then put one individual put the cell one by one. Lastly, **Ii** are chosen from **\[1, 25\]** uniformly and randomly and independently for **i=1,2,...,K**.

There are **20** test files in the judge. The score for each test case is calculated as described in the statements. Then the score for each test file is defined by the sum of the score of test cases in the test file. Finally, the final score is defined by the average of the score for each test file. During the contest, only the first **12** test cases in each test case affect the score, and the scores of the rest **48** test cases are treated as 0.

### Note

You are allowed maximum of 200 submissions in this problem. Also, no memory and time limit information will be provided for the test cases which are meant to be judged after the contest (i.e. 80% of the test cases). Though, you will be told AC/WA for that too.
