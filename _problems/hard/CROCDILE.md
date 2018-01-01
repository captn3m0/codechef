---
category_name: hard
problem_code: CROCDILE
problem_name: Crocodile
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
problem_author: admin
problem_tester: null
date_added: 14-06-2013
tags:
    - admin
editorial_url: 'http://discuss.codechef.com/problems/CROCDILE'
time:
    view_start_date: 1371820895
    submit_start_date: 1371820895
    visible_start_date: 1371820895
    end_date: 1735669800
    current: 1493556676
layout: problem
---
All submissions for this problem are available.Archaeologist Benjamas is running for her life after investigating the mysterious Crocodile's Underground City. The city has **N** chambers. There are **M** bidirectional corridors, each connecting a different pair of distinct chambers. Running through different corridors may require different amounts of time. Only **K** of the **N** chambers are exit chambers that allow her to escape. Benjamas starts in chamber . She wants to reach an exit chamber as quickly as possible.

The Crocodile gatekeeper wants to prevent Benjamas from escaping. From his den, he controls secret doors that can block any _single_ corridor. That is, whenever he blocks a new corridor, the previously blocked one has to be reopened.

Benjamas's situation can be described as follows: Each time she tries to leave a chamber, the Crocodile gatekeeper may choose to block one of the corridors adjacent to it. Benjamas then chooses and follows one of the unblocked corridors to the next chamber. Once Benjamas enters a corridor, the Crocodile gatekeeper may not block it until Benjamas reaches the other end. Once she enters the next chamber, the gatekeeper may again choose to block one of the outgoing corridors (possibly the corridor that Benjamas just followed), and so on.

She would like to have a simple escape plan in advance. More precisely, she would like to have a set of instructions that tell her what to do when she gets to a chamber. Let **A** be one of the chambers. If it is an exit chamber, no instructions are needed–obviously, she can escape the city. Otherwise, the instruction for chamber **A** should have one of the following forms:

- "If you ever reach chamber **A**, take the corridor leading to chamber **B**. However, if that corridor is blocked, then take the corridor leading to chamber **C**."
- "Don't bother about chamber **A**; according to this escape plan you cannot possibly reach
  it."

Note that in some cases (for example, if your plan directs Benjamas to run in a cycle) the gatekeeper may be able to prevent Benjamas from reaching an exit. An escape plan is good if Benjamas is guaranteed to reach an exit chamber after a finite amount of time, regardless of what the _gatekeeper_ does. For a good escape plan, let **T** be the smallest time such that after time **T**, Benjamas is guaranteed to reach an exit. In that case, we say that the _good escape plan_ takes time **T**.

Let us assume that:

- **N** – the number of chambers. The chambers are numbered  through **N-1**.
- **M** – the number of corridors. The corridors are numbered  through **M-1**.
- **R** – a two-dimensional array of integers representing the corridors. For **0 ≤ i < M**, corridor i connects two distinct chambers **R\[i\]\[0\] and R\[i\]\[1\]**. No two corridors join the same pair of chambers.
- **L** – a one-dimensional array of integers containing the times needed to traverse the corridors. For **0 ≤ i < M**, the value **1 ≤ L\[i\] ≤ 1,000,000,000** is the time Benjamas needs to runthrough the **ith** corridor.
- **K** – the number of exit chambers. You may assume that **1 ≤ K < N**.
- **P** – a one-dimensional array of integers with K distinct entries describing the exit chambers. For **0 ≤ i < K**, the value **P\[i\]** is the number of the **ith** exit chamber. Chamber 0 will never be one of the exit chambers.

###  Input

First line of input contains an integers **N, M K**. This will be followed by **M** lines, each having 3 integers **R\[0\]\[i\]** and **R\[0\]\[i\]** and **L**. This will be followed by another line having **K** integers **P\[j\]**.

###  Output 

Output an integer, denoting the smallest time **T** for which there exists a good escape plan that takes time **T** . You may assume that each non-exit chamber will have at least two corridors leaving it. You may also assume that in each test case there is a good escape plan for which **T = 1,000,000,000**.

### Examples

**Example 1:**
/>

**Input**
/>

<pre>
5 4 3
0 1 2
0 2 3
3 2 1
2 4 4
1 3 4

</pre>**Output**/>

`7`**Explaination**: Consider the case shown in Figure 1, where **N=5, M=4, K=3**, and


![croc](http://www.codechef.com/download/croc.png)
 
/>/>/>

Chambers are shown as circles, and corridors connecting them are shown as lines. Exit chambers are shown as thick-bordered circles. Benjamas starts at chamber 0 (marked by a triangle). An optimal escape plan is the following one:

- If you ever reach chamber 0, take the corridor leading to chamber 1. However, if that corridor is blocked, then take the corridor leading to chamber 2.
- If you ever reach chamber 2, take the corridor leading to chamber 3. However, if that corridor is blocked, then take the corridor leading to chamber 4.
  In the worst case, Benjamas will reach an exit chamber in 7 units of time.

**Example 2:**
/>

**Input**
/>

<pre>
5 7 2
0 2 4
0 3 3
3 2 2
2 1 10
0 1 100
0 4 7
3 4 9
1 3

</pre>**Output**
<pre>
14

</pre>**Explaination**: Consider the case shown in Figure 2, where **N=5, M=7, K=2**, and
![croc_1](http://www.codechef.com/download/croc_1.png)
 
/>/>

Here is an optimal escape plan:

- If you ever reach chamber 0, take the corridor leading to chamber 3. However, if that corridor is blocked, then take the corridor leading to chamber 2.
- If you ever reach chamber 2, take the corridor leading to chamber 3. However, if that corridor is blocked, then take the corridor leading to chamber 1.
- Don't bother about chamber 4; according to this escape plan you cannot possibly reach it.

Benjamas will reach one of the exit chambers no later than after 14 units of time.

### Subtasks

**Subtask 1 (46 points)**

- 3 ≤ **N** ≤ 1 000.
- The underground city is a tree. That is, **M = N-1** and for each pair of chambers **i** and **j** there is a sequence of corridors connecting **i** and **j**.
- Every exit chamber is connected to exactly one other chamber.
- Any other chamber is connected directly to three or more other chambers.

/> **Subtask 2 (43 points)**

- 3 ≤ **N** ≤ 1,000.
- 2 ≤ **M** ≤ 1,00,000.

**Subtask 3 (11 points)**

- 3 ≤ **N** ≤ 1,00,000.
- 2 ≤ **M** ≤ 1,000,000.

- - - - - -


 Note :

- Courtesy: [IOI 2011](http://www.ioi2011.or.th/tasks)
- This problem has been slightly modified to suit the online judge of CodeChef.

/>
