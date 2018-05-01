---
category_name: hard
problem_code: FBCHEF
problem_name: 'Final Battle of Chef'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: adurysk
problem_tester: white_king
date_added: 17-01-2013
tags:
    - adurysk
    - april14
    - bit
    - medium
    - segment
editorial_url: 'http://discuss.codechef.com/problems/FBCHEF'
time:
    view_start_date: 1397468362
    submit_start_date: 1397468362
    visible_start_date: 1397467741
    end_date: 1735669800
    current: 1493556704
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL14/mandarin/FBCHEF.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL14/russian/FBCHEF.pdf).

Chef declared war on Byteland. Chefs best scientist Pramod has designed a new Fighter Plane which can fly with Speed of Light!! So none of the defence forces of Byteland can defeat or defend it.

Byteland has a structure of a tree with **N** cities connected by **N-1** bidirectional roads. Each city has index between (**1**, **N**) (inclusive) and no two cities have same index. The capital city of Byteland has index **1**. The distance between two cities is the number of roads in the path from one to other.

If the plane drops a bomb on a city **A**, with damage value **X** then the damage done to a city **B** will be floor(**X/2d**) where **d** is the distance between **A** and **B**, note that as the distance of **A** from itself is 0, the damage done to **A** will be floor(**X/20**) = **X**.

Each city has a certain wealth **Wi** in it, if it is damaged by a value of **X** then its wealth is reduced by **X**. On a day if the wealth of a city becomes less than or equal to zero then it is considered Economically Dead.

Your task is to write a program that keeps track of the bombings done by the plane and answer the queries asked by the chef. The chef has a total of **Q** queries for you. There are two types of queries.

1\) Chef gives you two integers **A** and **X**, which means that the plane drops a bomb on the city with index **A** with damage value **X**. A bomb can also be dropped on economically dead city.
2\) Chef gives you an integer **A** and you need to print the number of cities that are economically dead which have **A** in the path from the capital to them.
(See explanation for better understanding)

### Input

First line contains an Integer representing **N** the number of cites.
Next **N** lines contain one integer each, integer on the **ith** line represents the **Wi**, wealth of the city with index **i**.
Next **N - 1** lines contain two integers **U** and **V** each, which means that there is a road connecting cities **U** and **V**.
Next line contains an integer **Q**, the number of Queries.
Next **Q** lines represent one query each, if the first integer in the line is **1** then the query is of type **1**, it is followed by two integers **A** and **X**, else the query is of type **2**, it is followed by one integer **A**.(The meanings of the variables are well explained in the question)

### Output

For each query of type **2** print the required value asked in the question.

### Constraints

1 <= **N** <= 105 
1 <= **Q** <= 105 
1 <= **A** <= **N**

1 <= **U, V** <= **N**, **U** ≠ **V**

1 <= **X** <= 105
1 <= **Wi** <= 109

### Example

<pre>
<b>Sample Input</b>
4
2
5
5
2
1 2
2 3
3 4
4
1 3 4
2 2
1 2 2
2 1
<b>Sample Output</b>
1
3
</pre>### Explanation

Path from Capital to City 1 : 1

Path from Capital to City 2 : 1 <--> 2

Path from Capital to City 3 : 1 <--> 2 <--> 3

Path from Capital to City 4 : 1 <--> 2 <--> 3 <--> 4

Cities having 1 in the path connected to Capital City : (1,2,3,4)

Cities having 2 in the path connected to Capital City : (2,3,4)

Cities having 3 in the path connected to Capital City : (3,4)

Cities having 4 in the path connected to Capital City : (4)

Distances of cities from city 1 : (0,1,2,3)

Distances of cities from city 2 : (1,0,1,2)

Distances of cities from city 3 : (2,1,0,1)

Distances of cities from city 4 : (3,2,1,0)

Initial Wealths of the Cities : (2,5,5,2)

On the First Day a Bomb of Damage 4 is Dropped on City 3. So Damages Done to other Cities are (4/(22), 4/(21), 4/(20), 4/(21)) = (1,2,4,2). Wealths of Cities after Day 1 : (1,3,1,0)

On the Second Day City 2 is queried. As only City 4 is dead, output is 1.

On the Third Day a Bomb of Damage 2 is Dropped on City 2. So Damages Done to other Cities are (2/(21), 2/(20), 2/(21), 2/(22)) = (1,2,1,0). Wealths of Cities after Day 3 : (0,1,0,0)

On the Fourth Day City 1 is queried. As Cities (1,3) are dead on third day and city 4 on first day, so the output is 3.
