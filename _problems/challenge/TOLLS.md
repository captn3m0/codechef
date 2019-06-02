---
category_name: challenge
problem_code: TOLLS
problem_name: 'Pricing Tollbooths'
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
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '3.07'
source_sizelimit: '50000'
problem_author: friggstad
problem_tester: pieguy
date_added: 10-04-2010
tags:
    - challenge
    - friggstad
    - june10
editorial_url: 'http://discuss.codechef.com/problems/TOLLS'
time:
    view_start_date: 1276266450
    submit_start_date: 1276266450
    visible_start_date: 1276266450
    end_date: 1735669800
    current: 1525199679
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Your company has recently built its own highway from which they hope to generate some revenue. The highway has no branches or intersections, it is a simple line segment. Your company also has access to simple data from some potential customers that describe their start and endpoint locations and their budget.

Tollbooths are also located on various locations on the highway. The total toll a customer pays is the sum of all tolls on the tollbooths that lie between their start and end locations. If a customer cannot afford the total toll they must pay, then they simply don't make the trip and end up paying nothing.

No customer wants to start or end their destination at the precise location of a tollbooth so we can represent the problem as follows. We have a graph that is a simple path with N nodes. Each node represents a potential start or end location of a customer and there is a single tollbooth located on the middle of each edge. So the total toll a customer pays is the sum of the tolls on the edges they cross to reach their endpoint.

Your task is to set the tolls on each of the tollbooths to generate some revenue for your company.

### Input:

The first line contains an integer T (about 40) indicating the number of test cases. Each test case begins with two positive integers N and M (both at most 100) where N is the number of nodes in the graph and M is the number of potential customers. M lines follow where the i'th line contains the information of the i'th client.

Each such line consists of three integers S, E, B where 1 <= S,E <= N are, respectively, the start and end locations of the customer and 1 <= B <= 1,000,000 is the customer's budget.

A blank line separates test cases (as well as the first line containing T and the first test case).

### Output:

For each test case, you are to output a single line consisting of N-1 integers, each of which is between 0 and 1,000,000. The i'th integer (1 <= i <= N-1) denotes the toll placed on the edge connecting nodes i and i+1. ### Scoring:

From the output, we will calculate the total revenue obtained from all customers who can afford the total toll on their route according to the prices you set. The score for each test case is then calculated as R/T where R is the revenue obtained and T is the total budget of all customers. The score for the entire set of test cases is just the sum of the scores of each individual test case. ### Example: Input:

<pre>
2

3 3
1 2 10
2 3 10
1 3 10

4 3
1 2 10
2 3 10
1 4 15
</pre>
### Output:

<pre>
5 5
10 10 0
</pre>
In the first test case, the first two customers only pay a total toll of 5 and the last customer pays 10 so the total revenue is 20. The score for this case is 20/30.

In the second case, the first two clients pay their full budget but the last client cannot afford the desired route. The total revenue is then 20 and the score for this case is 20/35.
