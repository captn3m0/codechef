---
category_name: hard
problem_code: CBAL
problem_name: 'Chef and Balanced Strings'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: ma5termind
problem_tester: kevinsogo
date_added: 3-03-2015
tags:
    - ma5termind
    - may15
    - medium
    - sqrt
editorial_url: 'http://discuss.codechef.com/problems/CBAL'
time:
    view_start_date: 1431941400
    submit_start_date: 1431941400
    visible_start_date: 1431941400
    end_date: 1735669800
    current: 1493556627
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY15/mandarin/CBAL.pdf) and [Russian](http://www.codechef.com/download/translated/MAY15/russian/CBAL.pdf).

Chef Smurf likes strings a lot but he likes balanced strings more. Smurf calls a string **S** a balanced string if and only if characters of strings **S** can be partitioned into two multi-sets **M1** and **M2** such that **M1 = M2**.
**For eg :** Strings such as **aabbcc**, **abcabc** , **baccba** , **abccba** are all balanced strings as their characters can be partitioned into two multi-sets **M1** and **M2** such that **M1 = M2 = {a,b,c}**  whereas strings such as **aba**, **abc** , **abcdef**, **blablah** are not balanced strings./>

Today, Smurf found a special string **P** consisting of **N** lower case Latin letters. Smurf wants to make some queries about his string **P**.

Each of Smurf's query consists of **3** integers **L R type**. For a given query, Smurf wants to calculate this :

 ![](https://s3.amazonaws.com/codechef_shared/download/CBAL/4.png)

For all **Ts,e**, where **Ts,e** is balanced string such that starting index **s** and ending index **e** of a chosen string **Ts,e** satisfies **L ≤ s < e ≤ R.**

**Note :** **|Ts,e|** denotes the length of string **Ts,e**.

Just to make this problem little bit more interesting, given input is encoded. Instead of **L** and **R** in each query, you will be provided with two integers **X** and **Y**. Two keys **A** and **B** are used to decode the given input.


<pre>
void decode(){
    A = 0 ; // initialising first key 
    B = 0 ; // initialising second key 
    Q = input(); // number_of_queries;
    while( Q -- ) {
        X = input(); 
        Y = input();
        type = input() ;
        L = ( X + A ) % N + 1; // decoding L
        R = ( Y + B ) % N + 1; // decoding R
        // N is the length of the given string
        if (L > R) {
            // swap L and R
            int T = L;
            L = R;
            R = T;
        }  
        ans = solve(L,R,type); // calculate answer for current query
        A = B;     // updating key A 
        B = ans;   // updating key B 
    } 
}

</pre>
/>

Smurf cannot accomplish this task alone. Can you help him ?

### Input

First line of the input contains a single integer **T** denoting the number of test cases. First line of each test case contains a string **P** denoting the chef's special string. Next line of the each test case contains a single integer **Q** denoting the number of chef's queries. Next **Q** lines of the each test case contains three space separated integers denoting **X**, **Y** and **type** respectively.

### Output

For each of the chef's query, print the required answer.

### Note 

Two substrings **Ts1,e1** and **Ts2,e2** are considered to be different if either **s1 != s2** or **e1 != e2** where **s1,e1** and **s2,e2** are the starting and ending indices of string **T1** and string **T2** respectively.

### Constraints

- **1 ≤ T ≤ 105.**
- **1 ≤ |P| ≤ 105.**
- **1 ≤ Q ≤ 105.**
- **0 ≤ X,Y < |P|.**
- **type = { 0 , 1 , 2 }.**
- **sum of N over all test cases i.e SN does not exceed 105.**
- **sum of Q over all test cases i.e SQ does not exceed 105.**
- **All test files are strictly according to constraints.**

### Subtasks

- Subtask #1: **1 ≤ SN,SQ ≤ 500 , type = { 0, 1, 2 }. : ( 20 pts )**
- Subtask #2: **1 ≤ SN,SQ ≤ 104 , type = { 0, 1, 2 }. : ( 20 pts )**
- Subtask #3: **1 ≤ SN,SQ ≤ 105 , type = { 0 }. : ( 20 pts )**
- Subtask #4: **1 ≤ SN,SQ ≤ 105 , type = { 0, 1 }. : ( 20 pts )**
- Subtask #5: **1 ≤ SN,SQ ≤ 105 , type = { 0, 1, 2 }. : ( 20 pts )**

### Example

<pre>
<b>Input</b>
1
cchheeff
5
0 1 0
0 2 1
7 5 2
0 7 0
1 1 2
<b>Output</b>
1
8
80
10
4
</pre>### Explanation

<pre>
<b>After decoding queries will take the following form : </b>
1
cchheeff
5
1 2 0
1 4 1
1 6 2
1 8 0
2 4 2
<p>Q1 : "cc" is the only balanced string. Type = 0 and therefore answer = 1.<br></br>Q2 : "cc" , "hh" , "cchh" are the only balanced strings. Type = 1 and therefore answer = 2 + 2 + 4 = 8.<br></br>Q3 : "cc" , "hh" , "ee" , "cchh" , "hhee" , "cchhee" are the only balanced strings. Type = 2 and therefore answer = 2<sup>2</sup> + 2<sup>2</sup> + 2<sup>2</sup> + 4<sup>2</sup> + 4<sup>2</sup> + 6<sup>2</sup>= 80./>/></p>
<h3>Warning</h3>
<p>Large test data set, Prefer to use faster input/output methods .</p>
</pre>