---
category_name: easy
problem_code: HOMDEL
problem_name: 'Delivery Boy'
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
problem_author: vamsi_kavala
problem_tester: laycurse
date_added: 1-07-2012
tags:
    - aug12
    - shortest
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/HOMDEL'
time:
    view_start_date: 1344677312
    submit_start_date: 1344677312
    visible_start_date: 1344677400
    end_date: 1735669800
    current: 1493558154
layout: problem
---
All submissions for this problem are available.Chef has started Home Delivery scheme in one of his restaurants. As the scheme is new , Chef appoints only one employee to deliver food to various locations. The delivery boy who has been appointed is an absent-minded chap. He always forgets to fill fuel in his delivery scooter. So what he does is that whenever Chef sends him for delivery, he goes to the gas station from the restaurant first. He gets his tank filled and then he heads towards his destination. He will do this every single time _irrespective of the destination_. The delivery boy tries his best to be on time. And to do this, he will choose those paths(from restaurant to gas station AND gas station to destinaion) which cost him the _least_ amount of time. Your task is to tell the Chef how much time can the delivery boy save if he had enough fuel in his scooter i.e. if he went to the destination directly without stopping for fuel (taking the path which costs him least amount of time).

The city has **N** streets numbered from  to **N-1**. The restaurant is on street number **S**, the gas station is on street number **G** and the food has to be delivered to street **D** . Note that **S, G** and **D** need **not** be distinct.

### Input:

First line of the input contains a single integer **N**.
Then follows an **NxN** matrix **T** which is represented in **N** lines with **N** space separated integers on each line.
**T\[i\]\[j\]** denotes the time taken to move from the ith street to jth street. Obviously, **T\[i\]\[i\]** = 0. 
Next line contains a single integer **M**, the number of scenarios.
The following **M** lines contain 3 space separated integers **S**, **G** and **D**.
### Output:

For each of the **M** scenarios, output the time taken by the delivery boy to deliver the food and the time he could have saved if he went directly from **S** to **D**.
Both these values must be on the same line separated by a single space.

### Constraints:

<pre>

1 ≤ <b>N</b> ≤ 250
1 ≤ <b>M</b> ≤ 10000
0 ≤ <b>T[i][j]</b> ≤ 100000
0 ≤ <b>S</b>,<b>G</b>,<b>D</b> ≤ <b>N</b>-1


</pre>### Example:
**Input:**```

4
0 2 1 3
1 0 4 5
3 1 0 3
1 1 1 0
4
0 2 1
0 2 2
3 1 2
3 0 1


<pre>**Output:**<pre>
2 0
1 0
3 2
3 2


</pre>