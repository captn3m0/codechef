---
category_name: challenge
problem_code: EFFDELIV
problem_name: 'Efficient Delivery'
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
problem_author: xcwgf666
problem_tester: null
date_added: 12-09-2015
tags:
    - challenge
    - dijkstra
    - knapsack
    - oct15
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/EFFDELIV'
time:
    view_start_date: 1444642200
    submit_start_date: 1444642200
    visible_start_date: 1444642200
    end_date: 1735669800
    current: 1525454418
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/OCT15/mandarin/EFFDELIV.pdf) and [Russian](http://www.codechef.com/download/translated/OCT15/russian/EFFDELIV.pdf) 

Sergey works as a delivery boy. Every day he has a number of deliveries to be completed.

Sergey lives in Bytetown - a city, consisting of **N** junctions, and **M** roads connecting these junctions. More precisely, the **i**th road connects the junctions with the numbers **Xi** and **Yi**. Each of these roads has its own (positive) length **Zi**, and no road connects a junction to itself.

There are **K** delivery orders for Sergey. Each order is denoted with **four** integers: **Aj**, **Bj**, **Vj** and **Cj**. It means that for the **j**th order Sergey has to pick a parcel of weight **Vj** at the junction numbered **Aj** and deliver it to the junction numbered **Bj**. After the parcel is delivered, Sergey gets **Cj** burles of reward. Sergey can't complete the same order twice or more times.

So, the business day for Sergey looks as follows: he remembers the whole list of orders and starts at his initial junction numbered **S**. Then, he travel the streets of the city via his bike. If Sergey visits a junction, where there is one or more orders available he can either take some of the orders and load the corresponding parcels on his bike, or not take anything now but do it later, if he appears at the same junction again. When Sergey visits a junction which is the destination for some of the parcels that are currently with him, he can complete these orders and unload the corresponding parcels.

Sadly, Sergey is not infinitely strong. Though he can carry any number of parcels at once, if the total weight of the parcels exceeds **W** Sergey won't be able to carry them on his bike. Sergey also can't take a parcel and not deliver it because there will be complains, hurting Sergey's reputation.

The bike has enough fuel to travel only for **D** units of distance. It is not necessary for Sergey to get back to his initial junction because he has a lot of friends in Bytetown who will drop him back after the party (Sorry, you're not invited). It is clear that under the given constraints, Sergey might be not able to deliver all the parcels. So your task is to plan the delivery for Sergey in such a way that:

- He moves only by streets
- The total travelled distance doesn't exceed **D**.
- There are no undelivered parcels with Sergey by the end of the delivery. In other words, all the parcels that Sergey has picked up should be delivered.
- At any time, Sergey does not carry more than **W** units of weight.
- The most important: the profit Sergey gets by the end of the day is maximized. You don't have to find the optimal delivery, but the more profit there is, the more are the points you'll get.

### Input

The first line contains two space separated integers **N** and **M** denoting the number of junctions and the number of streets.

Each of the following **M** lines contain three space separated integers **Xi**, **Yi** and **Zi**, denoting that the **i**th street of length **Zi** connects the **Xi**th and the **Yi**th junctions. All the streets are **bidirectional**.

The next line contains a single integer **K** denoting the number of orders.

Each of the following **K** lines contain four space-separated integers **Aj**, **Bj**, **Vj** and **Cj**, denoting that for the **j**th order, the parcel should be picked up at the **Aj**th junction, left at the **Bj**th junction, has the weight of **Vj**, and when delivered, gives **Cj** burles of profit.

The following line contains three space-separated integers **S**, **D** and **W** denoting the starting junction, the maximal distance that Sergey can travel and the maximum weight he can carry at any time, respectively.

### Output

The first line of output should contain a single integer **Op**, denoting the number of operations. Each of the following **Op** lines should contain the operation code and the parameter. The following are the descriptions of the operation codes and the meanings of the parameters:

- 0 **P**. Here 0 is the operation code and **P** is the parameter. The meaning is that Sergey should move from his current junction to the adjacent junction **P**. In case there is no **direct one-street** connection between Sergey's current position and the junction **P**, you will receive a *wrong answer* verdict. In case Sergey is unable to reach the junction **P** because the amount of fuel is too low, you will also get *wrong answer* verdict.
- 1 **P**. Here **1** is the operation code and **P** is the parameter. The meaning is that Sergey should takes the order numbered **P** in the orders' list. In case this order was already taken or Sergey is not in the junction which is the pick-up junction for the order, you will get a *wrong answer* verdict. In case the weight that Sergey will have to carry exceeds **W** after taking this order, you'll also get a *wrong answer* verdict.
- 2 **P**. Here **2** is the operation code and **P** is the parameter. The meaning is that Sergey should deliver the parcel for the order number **P** in 1-based orders' list. In case Sergey doesn't carry the parcel from this order, you'll receive *wrong answer* verdict.

You can also get a *wrong answer* if your output doesn't satisfy the format above or some parcels picked up by Sergey are left undelivered. If all the requirements are satisfied, you'll receive an *accepted* verdict ;).

### Test data and scoring

There are **20** test cases in total. They are split into **5** groups, **4** tests in each.

- In all the test cases: 
  - **1** ≤ **Xi, Yi, Aj, Bj, S** ≤ **N**
  - **1** ≤ **Vj** ≤ **W**
  - **1** ≤ **Cj** ≤ **106**
  - It is possible to reach **any** junction from the initial junction **S** via the streets.
  - The streets are **bidirectional**.
  - Each pair of junctions is connected with **no more that one** street.
- Group 1: 
  - **1** ≤ **N** ≤ **100**
  - **1** ≤ **M, K** ≤ **1000**
  - **1** ≤ **D, W** ≤ **10000**
  - **1** ≤ **Zi** ≤ **100**, for all the streets.
- Group 2: 
  - **1** ≤ **N** ≤ **1000**
  - **1** ≤ **M, K** ≤ **1000**
  - **1** ≤ **D** ≤ **10000**
  - **1** ≤ **W** ≤ **106**
  - **Zi** = 1 for all the streets.
- Group 3: 
  - **1** ≤ **N** ≤ **10000**
  - **M** = **N-1**
  - **1** ≤ **K** ≤ **10000**
  - **1** ≤ **D** ≤ **105**
  - **1** ≤ **W** ≤ **10000**
  - **1** ≤ **Zi** ≤ **100**, for all the streets
- Group 4: 
  - **1** ≤ **N** ≤ **105**
  - **1** ≤ **M, K** ≤ **105**
  - **1** ≤ **D** ≤ **105**
  - **1** ≤ **W** ≤ **105**
  - **1** ≤ **Zi** ≤ **10**, for all the streets
- Group 5: 
  - **1** ≤ **N** ≤ **105**
  - **1** ≤ **M, K** ≤ **105**
  - **1** ≤ **D** ≤ **105**
  - **1** ≤ **W** ≤ **109**
  - **1** ≤ **Zi** ≤ **10**, for all the streets

The score for a single test case equals the total profit of Sergey. The score for the whole task is the sum of the scores among all the test cases.

During the contest, you won't see the score of your solution on the complete test set. Instead of this, you will see the score, based on **4** test cases: one test case for each of groups **1-4**. You will also see whether your program got **accepted** verdict on **all** the test cases (not only these 4), but time and memory stats will be reported based **only** on four premilinary test cases.

### Example

<pre><b>Input:</b>
<tt>5 5
1 2 1
2 3 2
1 4 1
4 5 1
5 2 3
3
1 4 5 10
2 5 6 15
4 1 10 10
1 5 12</tt>

<b>Output:</b>
<tt>7
1 1
0 2
1 2
0 5
2 2
0 4
2 1</tt>

</pre>
### Explanation

Sergey starts at the junction numbered the **1**st. Before moving on, he takes the order numbered the **1**st. Then he moves to the **2**nd junction and there he takes the **2**nd order. Then, Sergey moves to the **5**th junction, where he delivers the parcel from the **2**nd order. Finally, he moves to the **4**th junction, where he delivers the parcel from the **1**th order.

The total profit that Sergey receives from this delivery is **(10 + 15) = 25** burles. Hence, this answer will get the score of **25**.
