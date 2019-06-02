---
category_name: hard
problem_code: SCIENCEF
problem_name: 'Science Fair'
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
    - rust
    - SCALA
    - swift
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
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: usaxena95
problem_tester: null
date_added: 5-12-2017
tags:
    - acm17kgp
    - bitmask
    - dynamic
    - hard
    - kgp17rol
    - tsp
    - usaxena95
editorial_url: 'https://discuss.codechef.com/problems/SCIENCEF'
time:
    view_start_date: 1515875400
    submit_start_date: 1515875400
    visible_start_date: 1515875400
    end_date: 1735669800
    current: 1525454407
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.This is a story of city Chef Land. The transport network of the city contains **V** intersections and **E** bidirectional roads. The intersections are numbered from 1 to **V**. Every intersection can be reached from every other intersection. The road **Ei** has length **Wi**. The Mayor is organizing a **Science Festival** at intersection **F**.

The **N** students studying in School of Chef Land have requested their principal to send them to the Festival. Each student lives at an intersection (student **i** lives at intersection **Pi**). The school is present at intersection **S**.

The principle wants to send randomly some of the **N** students to the Science Festival. He writes their names on an Official List and gives it to the bus driver to arrange the transport. The probability that name of **ith** student is written on the list is equal to the percentage marks **Mi** he receives in Science.

The driver's job is to drive the school bus from school **S** to Festival **F** picking up all the students mentioned on the official list. Since all the students are super excited to visit the festival, therefore if the bus goes through the intersection they are living on, they will on board the bus even if their name was not written on the official list by the principal.

We know that the bus driver doesn’t like talkative people in the bus. Also, for every student **i** we know his talkativeness value **Ti**. The talkativeness of the trip done by driver from **S** to **F** is defined as the **product** of Talkativeness of all the students that got into the bus.

For a trip: The driver faces a **cost(Trip)** = **Length(Trip)** + **(Talkativeness(Trip) modulo 109+7 )**. Therefore the driver always chooses the path with minimum cost. He also charges this amount from the principal.

If the driver receives an **empty list** he cancels the trip and the cost is **0.**

The principal wants to know the expected value of money paid by him to the driver for a single trip.

### Input

- The first line contains 4 space separated integers **V, E, S, F**.
- The second line contains a single integer **N**.
- **ith** line of the next **N** lines contains 3 integers each **Pi** **Ti Mi**.
- The next **E** lines contains 3 integers each **u v w** denoting a road of length **w** between intersections **u** and **v**.

### Output

Print a single integer **(A\*B-1) mod** **109+7** where **A/B** is the expected money paid by the principal and gcd(A, B) = 1. **B-1** is the modular inverse of **B** modulo **109+7**

### Constraints

- **1** ≤ **V** ≤ **1000**
- **1** ≤ **E** ≤ **3000**
- **1** ≤ **N** ≤ **16**
- **1** ≤ **S, F,** **Pi** ≤ **V**
- **S, F, Pi**'s are all distinct
- 0 ≤ **Mi** ≤ **100**
- 0 ≤ **Ti** ≤ **109+6**
- **1** ≤ **w** ≤ **106**
- **1** ≤ **u, v** ≤ **V**
- There is at most 1 road between any pair of intersection
- Every intersection can be reached from every other intersection.
- **u ≠ v**

### Example

<pre><b>Input:</b>
5 5 1 5
3
2 1 50
3 1 50
4 1 50
1 2 1
1 3 1
1 4 1
2 5 1
3 5 1

<b>Output:</b>
125000005
</pre>
### Explanation

**Official List****Probability****Path travelled****Length****Students**
**in trip****Talk**
**Value****Cost**{}1/8None0None00{2}1/81-2-52{2}13{3}1/81-3-52{3}13{4}1/81-4-1-3-54{3, 4}1\*15{2, 3}1/81-2-1-3-54{2, 3}1\*15{2, 4}1/81-4-1-2-54{2, 4}1\*15{3, 4}1/81-4-1-3-54{3, 4}1\*15{2, 3, 4}1/81-4-1-2-1-3-56{2, 3, 4}1\*1\*17Expected cost =(0+3+3+5+5+5+5+7)/8 = 33/8 = 33 \* 8-1 **mod** **109+7**= 33\*125000001  **mod** **109+7 =** 125000005
