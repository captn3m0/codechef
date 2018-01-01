---
category_name: easy
problem_code: WSITES01
problem_name: 'Blocked websites'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: ismagilov
problem_tester: null
date_added: 4-05-2017
tags:
    - ismagilov
    - long
    - may17
editorial_url: 'https://discuss.codechef.com/problems/WSITES01'
time:
    view_start_date: 1495099800
    submit_start_date: 1495099800
    visible_start_date: 1495099800
    end_date: 1735669800
    current: 1497284414
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/MAY17/mandarin/WSITES01.pdf), [russian](http://www.codechef.com/download/translated/MAY17/russian/WSITES01.pdf) and [vietnamese](http://www.codechef.com/download/translated/MAY17/vietnamese/WSITES01.pdf) as well.

Mike is a network administrator in a university. One of his primary responsibilities in the job is to create an effective firewall so that the students are not able to visit the blocked sites in the network.

The network have access to exactly **N** sites. Some of these can be blocked. The names of the sites will be given in lowercase English letters.

The firewall will consist of several filters. A filter is a string that should be a prefix of some blocked site, and it should not be a prefix of any unblocked site. You want to minimize the sum of length of filters in the firewall so that for each of the blocked site, there should be a filter that contains the name of blocked site(filter is a prefix of blocked site).

### Input

The first line of the input contains an integer **N** denoting the number of sites in the network.

Then **N** lines follow, each of them describes the site. Each line starts from the char **С**. If the site is unblocked, **С** is equal to '+', otherwise **С** is equal to '-'., followed by a string denoting the name of the site.

### Output

If it is not possible to choose set of filters and satisfy all constraints, output a single line containing an integer -1.

Otherwise, in the first line print the number of filters K in the firewall. Then print **K** lines, in each line print the chosen filter. Please dislpay them in [lexicographical order](https://en.wikipedia.org/wiki/Lexicographical_order). You can prove that answer will be unique.

### Constraints

- 1 ≤ **N** ≤ 2 \* 105
- The sum of lengths of names of sites does not exceed 2\*105
- No two sites have same name.

### Subtasks

- **Subtask #1 (30 points)** 1 ≤ **N**, the sum of lengths of names of sites ≤ 3 \* 103
- **Subtask #2 (70 points)** Original constraints

### Example

<pre><b>Input:</b>
4
- codeforces
+ codechef
- youtube
+ google

<b>Output:</b>
2
codef
y

</pre>### Explanation
You can see that the filter "codef" is a prefix of the blocked site "codeforces", but not a prefix of approved sites "codechef" and "google". Similarly, filter "y" is also a prefix of blocked site "youtube", but not a prefix of the approved sites. You can also see that there exists at least one filter for both the blocked sites "codeforces" and "youtube".
