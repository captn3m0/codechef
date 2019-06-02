---
category_name: hard
problem_code: CHEFTRAF
problem_name: 'Traffic in Chefland'
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
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '9'
source_sizelimit: '50000'
problem_author: r_64
problem_tester: null
date_added: 22-09-2017
tags:
    - centroid
    - dfs
    - fenwick
    - hard
    - lca
    - ltime52
    - r_64
editorial_url: 'https://discuss.codechef.com/problems/CHEFTRAF'
time:
    view_start_date: 1506790800
    submit_start_date: 1506790800
    visible_start_date: 1506790800
    end_date: 1735669800
    current: 1514816843
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME52/mandarin/CHEFTRAF.pdf), [russian](http://www.codechef.com/download/translated/LTIME52/russian/CHEFTRAF.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME52/vietnamese/CHEFTRAF.pdf) as well.

 There are **N** cities in Chefland. Chef owns the biggest traffic company in Chefland, and Chef has built **N**-**1** bidirectional roads between these cities. The **i**-th road connects city **ai** and city **bi**, and is **ci** kms long. It's possible to travel between any two cities by going through these roads. However, only those people who have Chef's VIP card can use these roads. It costs 1 Chefcoin/km to travel on one of Chef’s roads.

 A businessman named Fehc came to Chefland to compete with Chef's company and created his own traffic network. It also contains **N**-**1** roads. The **i**-th of these roads connects city **pi** and city **qi**, and has length **ri** kms. Again, it is possible to travel between any two cities by going through Fehc's roads (and ignoring Chef's). Similar to Chef, only those people who have Fehc's VIP card can travel on these roads and it costs 1 Chefcoin/km to travel on one of Fehc's roads.

 On New Year's Day in Chefland, there is expected to be a huge traffic flow because of people travelling to celebrate with family and friends. For any **1** ≤ **i** < **j** ≤ **N**, there will be exactly one person who wants to go from city **i** to city **j**. To achieve this, he should ask Chef or Fehc for VIP cards and travel along the roads permitted by the cards. However, Chef and Fehc are in a competing relationship, and hence any one person can only get one VIP card. A person will choose that company that has a shorter(cheaper) route from city **i** to city **j**, buy that company's VIP card, and travel along that company's roads. If there is a tie, he chooses an arbitrary company(this doesn't affect the answer of the problem).

 There are **M**=**N\*(N-1)/2** people who will travel on New Year's Day. Your task is to compute the total amount of Chefcoins spent by them.

###  Input

- The first line of input contains a single integer **T** denoting the number of test cases.
- For each test case, the first line contains a single integer **N** denoting the number of cities in Chefland.
- The next **N-1** lines each contain three space-separated integers **ai**, **bi** and **ci**, denoting a road by Chef's company.
- The next **N-1** lines each contain three space-separated integers **pi**, **qi** and **ri**, denoting a road by Fehc's company.

###  Output

 For each test case, output one number denoting the total amount of Chefcoins that will be spent by the **M** travellers.

###  Constraints

- **1** ≤ **T** ≤ **1000**
- **2** ≤ **N** ≤ **50000**
- the sum of **N** over all test cases ≤ **200000**
- **1** ≤ **ai**, **bi**, **pi**, **qi** ≤ **N**
- **1** ≤ **ci**, **ri** ≤ **4096**

 Subtask #1 (8 points):

- **N** ≤ **1000**
- the sum of **N** over all test cases ≤ **5000**

 Subtask #2 (10 points):

- For any **1** ≤ **i** < **N**, **ai** = **pi**, **bi** = **qi**, **ci** = **ri**. In other words, Chef's and Fehc's traffic networks are exactly the same.

 Subtask #3 (23 points):

- Fehc's traffic network is a chain **1-2-3-...-N**

 Subtask #4 (59 points):

- original constraints

###  Example

<pre>
<b>Input:</b>
2
3
1 2 3
2 3 2
1 3 2
2 3 3
6
4 3 2
4 5 2
2 4 2
4 6 2
1 5 1
6 3 2
1 5 1
2 4 1
6 5 1
4 6 2

<b>Output:</b>
7
39

</pre>
###  Explanation

 **Example case 1:** There are 3 people:

- The first person goes from city 1 to city 2. He chooses Chef's roads and pays 3 chefcoin.
- The second person goes from city 1 to city 3. He chooses Fehc's roads and pays 2 chefcoin.
- The third person goes from city 2 to city 3. He chooses Chef's roads and pays 2 chefcoin.
