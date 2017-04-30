---
category_name: medium
problem_code: GANGAAM
problem_name: 'Interrogating Gangsters'
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
problem_author: 'satej '
problem_tester: null
date_added: 17-01-2014
tags:
    - cook42
    - easy
    - greedy
    - satej
editorial_url: 'http://discuss.codechef.com/problems/GANGAAM'
time:
    view_start_date: 1390158900
    submit_start_date: 1390158900
    visible_start_date: 1390158900
    end_date: 1735669800
    current: 1493557671
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK42/mandarin/GANGAAM.pdf) and [Russian](http://www.codechef.com/download/translated/COOK42/russian/GANGAAM.pdf) as well.

There is a party going on in a club situated in some city. **N** gangsters will attend that party. The **i**-th gangster comes to the party at the beginning of **Si** time and will leave the party at the end of **Ei**. At any time unit, the set of gangsters who are present in the party enjoy drinking together and become friends. After the party, the law enforcement agency in the city is suspecting that there has been some conspiracy for sabotage in the city. So they feel that it is necessary to interrogate several gangsters. But they don't have time to interrogate all of them. They are suspecting that there are **X** gangsters involved in this conspiracy. It is natural that those **X** gangsters will be friends with each other.

Now the enforcement agency have got the idea. They want to interrogate the gangsters in such a way that for each subset of **X** friend gangsters (where each pair of gangsters in that subset are friends), there will be at least one interrogated gangster from that subset. But to save their time, they want to interrogate minimum number of gangsters. Given the information of the gangsters and number **X**, help them to find the minimum number of gangsters to be interrogated.

**Note**: Two gangsters are friends if they have common time in the club. For example, the gangster entering at time 1 and leaving at time 3 can be a friend with another gangster entering at time 3 and leaving some time afterwards. But a gangster leaving at time 3 cannot be a friend with another gangster entering at time 4.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
Each test case starts with a line containing **N** and **X**. Each of the next **N** lines contains, the arrival **Si** and the departure **Ei** of a gangster.

### Output

For each test case, output a single line containing the minimum number of gangsters that the city law enforcement agency should interrogate.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **X** ≤ **N** ≤ **200**
- **1** ≤ **Si** ≤ **Ei** ≤ **109**

### Example

```
<b>Input:</b>
3
3 2
1 3
3 5
4 6
4 3
1 8
2 9
3 10
4 11
4 3
1 5
4 9
8 13
12 17


<b>Output:</b>
1
2
0

```
### Explanation

**Example case 1.** Gangsters 1 and 2 are friends each other. Also Gangsters 2 and 3 are friends with each other. So it is enough to interrogate gangster 2 only.

**Example case 2.**All of the four gangsters are friends with each other. The police suspects that the size of the group is 3. So it is enough to interrogate any two of the gangsters.

**Example case 3.**There is not any group of 3 gangsters, where each of them are friends with each other. So the police don't need to interrogate anybody.