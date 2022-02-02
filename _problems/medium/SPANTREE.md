---
category_name: medium
problem_code: SPANTREE
problem_name: 'Spanning Tree'
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
    - 'LISP sbcl'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sidhant007
problem_tester: null
date_added: 1-12-2017
tags:
    - acm17kgp
    - constructive
    - graph
    - interactive
    - kgp17rol
    - mst
    - sidhant007
editorial_url: 'https://discuss.codechef.com/problems/SPANTREE'
time:
    view_start_date: 1515875400
    submit_start_date: 1515875400
    visible_start_date: 1515875400
    end_date: 1735669800
    current: 1525198959
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given an undirected weighted connected graph with **N** vertices numbered from 1 to **N**. Chef knows all the edges of the graph but will only reveal information if you give him some money.

You have **104 coins**. You are allowed to ask the chef a certain type of query multiple times. In a single query, you will provide **2** non-intersecting, non-empty set of vertices. Let **A** be the first set and **B** be the second set. Chef then will respond by providing the minimum (least) weight edge between any pair of nodes **u** and **v**, such that node **u** is in set **A** and node **v** is in set **B**. In particular, he will return the end points of the least weight edge along with the weight of this edge (in case of a tie, Chef will choose arbitrarily). If there is no such edge, Chef returns **-1**. A single query costs you **|A|** coins, where |X| denotes the size of the set X. Do note that the Chef does NOT like too many numbers, so he has allowed the sum of **|A| + |B|** over all the queries to be at most **2\*106**

Your aim is to determine the sum of all the weights in a minimum spanning tree of this graph using at most 104 coins.

### Input and Output

You can interact with the judge using the standard input and output.

The first line of the input contains a single integer **N**, denoting the number of vertices.

You need to print to the standard output, for the operations you wish to perform. There are two types of operations:

- In the first type, you are asking the judge the least weight edge between 2 sets, **A** and **B**. You need to print **3** lines. 
    - The first line starts with **1 |A| |B|**, where **|A|** and **|B|** are the size of the 2 sets.
    - The second line contains **|A|** integers, denoting the elements of the set **A**.
    - The thirdline contains **|B|** integers, denoting the elements of the set **B**.
    
    The judge will return a triplet of integers by printing the integers in the standard input. It will be in the format **u v w**, where **u** and **v** denote the end points of the least weight edge between the 2 sets and **w** denotes the cost of this edge. In case there is no such edge then **u = v = w = -1**
- In the second type, you are telling the judge the answer. For each test case you should perform this operation exactly once at the end. It does not cost you any coins. You will print the answer to the standard output in the format **2 X**, where **X** should be the sum of all edge weights in a minimum spanning tree of this graph.

### Note

Don't forget to flush the standard output after printing each line. It can be done using fflush(stdout) in C/C++, System.out.flush() in Java and sys.stdout.flush() in Python.

If the **2** sets **A** and **B** given in the input are intersecting OR one of them is empty OR there are duplicate elements in one of them OR one of them has an element which does NOT belong to the range **\[1, N\]**, then your program will get the verdict Wrong Answer.

 Also if you cross the limit of **104** coins OR the sum of **|A| + |B|** over all the operations of type 1 exceeds the limit of **2\*106**, then your program will get the verdict Wrong Answer.

The query of second type doesn't cost you any coin.

### Constraints

- **2** ≤ **N** ≤ **103**
 For each query -

- **1** ≤ **u**, **v** ≤ **N**
- **1** ≤ **w** ≤ **105**

### Example

<pre><b>Input / Judge Feedback</b>                    <b>Your output / Your query</b>

5
                                                                1 1 1
                                                                1
                                                                5
1 5 2
                                                                1 1 2
                                                                2
                                                                1 4
2 1 3
                                                                1 2 2
                                                                1 2
                                                                4 3
1 4 8
                                                                1 1 1
                                                                4
                                                                5
-1 -1 -1
                                                                1 1 2
                                                                2
                                                                3 5
2 5 7
                                                                1 3 1
                                                                4 2 5
                                                                3
4 3 5
                                                                2 18

</pre>
### Explanation

The graph (which is hidden) in the sample has 5 nodes and the sum of the weights in the MST is 18.

![Explanation for the sample](https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KGP/SPANTREE.png)

- The cost of the first query is 1 coin.
- The cost of the second query is 1 coin.
- The cost of the third query is 2 coins.
- The cost of the fourth query is 1 coin.
- The cost of the fifth query is 1 coin.
- The cost of the sixth (last) query is 3 coins.

 So the total amount of coins used = 1 + 1 + 2 + 1 + 1 + 3 = 9 coins which is ≤ 10,000 coins

 Note - The above queries are not an ensured method of finding the correct answer given the graph had different edges, so please do NOT try to make any logical deductions using the sample queries.
