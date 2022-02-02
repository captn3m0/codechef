---
category_name: medium
problem_code: LVGFT
problem_name: 'Lovers Gift'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: ziein
problem_tester: null
date_added: 27-10-2017
tags:
    - dsu
    - medium
    - nov17
    - ziein
editorial_url: 'https://discuss.codechef.com/problems/LVGFT'
time:
    view_start_date: 1510579800
    submit_start_date: 1510579800
    visible_start_date: 1510579800
    end_date: 1735669800
    current: 1514816322
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/NOV17/mandarin/LVGFT.pdf), [Russian](http://www.codechef.com/download/translated/NOV17/russian/LVGFT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV17/vietnamese/LVGFT.pdf) as well.

 Chef buys lots of gifts for his love Chefua. Chef keeps all his money in the bank, and so if he wants to buy a gift, he must go to one of the branches of the bank in the country to get money, and then buy the gift.

The country where Chef lives consists of **N** cities which are connected by **N - 1** bidirectional roads in such way that there is a unique path from any city to any other city. The cities numbered from **1** to **N**. It so happens that the city numbers directly determine the quality of a gift bought in that city. That is, the city numbered **N** would have the best gift, and so on.

Initially, there are no branches of the bank in any city. Then one by one, the bank decides to open branches in some cities. If the Chef lives in city **C** and he wants to buy a gift, he would ideally want to buy from the city with the best gifts, which is City **N**. But remember that he has to take money from the bank. And Chef being lazy, does not want to travel extra just to go to the bank. He wants to go to the bank while going to the city from where he will buy the gift. In other words, he can buy from a City j, only if there is at least one bank branch in any of the cities on the unique path from City C to City j (both end points included).

But he has realized that all people from his city go to the highest numbered city, and it gets very crowded. Hence, being smart, he has decided that among all the cities that he could buy gifts from (as described earlier), he will go to the city which has the second highest number. Note that he can buy the gift from the city where the bank branch exists.

Chef also shifts his city frequently. These details and details of when and where the bank opens its branches are given to you. Each time Chef moves to a new city, you have to report which city he will buy the gift from.

### Input

- First line contains number **T** which is the number of test cases. The description of each testcase follows.
- The first line of each testcase contains two space-separated numbers **N** and **M**, which denote the number of cities in Chef's country and the number of events (queries) which will happen, respectively.
- The next **N - 1** lines will contain two space-separated numbers **U**, **V** which means that there is a bidirectional road between cities **U** and **V**.
- The next **M** lines will contain two space-separated numbers **type**, **C**, which denote the queries as described below: . 
    - If **type = 1**, this means that the bank is opening a branch in city **C**.
    - If **type = 2**, this means that Chef now lives in city **C**.

### Output

In each testcase, for every query of the form (**type = 2**, **C**) you should print which city Chef will buy the gift from now.

That is, Chef now lives in City **C**, and you know where all the bank branches are as of now. If the number of cities that he can buy the gift from (obeying the condition that he should pass by a bank branch) is less than 2, then you should print **-1**. Else, you should print the city which has the second highest number among them.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **N, M** ≤ 100000
- 1 ≤ **U, V** ≤ **N**
- 1 ≤ **type** ≤ 2
- 1 ≤ **C** ≤ **N**

### Subtasks

- Subtask #1 (20 points): 
    - 1 ≤ **T** ≤ 10
    - 1 ≤ **N, M** ≤ 1000
- Subtask #2 (80 points): Original constraints.

### Example

<pre><b>Input:</b>
1
5 6
1 2
2 3
2 4
1 5
1 4
1 4
2 5
1 2
2 3
2 1

<b>Output:</b>
-1
4
3
</pre>
### Explanation

The map of the country is as follows:

![](http://tinyurl.com/y9vtq58r)The first query says that the bank opened a branch in city 4. The second query also does the same, and it doesn't make anything different for us. So now, the maps looks as follows, where the circled city means that it has a bank branch:

![](http://tinyurl.com/yar2vjnn)The third query says that Chef now lives in city 5, and we need to print which city he would buy his gift from. He can only buy from city 4, because that is the only city which has a bank on the path from City 5 to it. And because he can go to less than 2 Cities, the answer for this query is -1.

The fourth query says that the bank is opening a branch in City 2. So now, the map looks as follows:

![](http://tinyurl.com/y8c7fsp8)The fifth query says that Chef now lives in City 3. From here, he can buy gifts from any of these cities: {1, 2, 4, 5}. And the city with the second highest number among these is 4, and hence that is our second output.

The last query says that Chef now lives in City 1. From here, he can buy gifts from any of these cities: {2, 3, 4}. And the city with the second highest number among these is 3, and hence that is our last output.
