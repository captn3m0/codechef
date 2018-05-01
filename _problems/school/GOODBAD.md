---
category_name: school
problem_code: GOODBAD
problem_name: 'Good and Bad Persons'
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
problem_author: admin2
problem_tester: null
date_added: 7-12-2017
tags:
    - acm17chn
    - admin2
    - cakewalk
    - chn17rol
editorial_url: 'https://discuss.codechef.com/problems/GOODBAD'
time:
    view_start_date: 1515357000
    submit_start_date: 1515357000
    visible_start_date: 1515357000
    end_date: 1735669800
    current: 1525198876
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef is a really nice and respectful person, in sharp contrast to his little brother, who is a very nasty and disrespectful person. Chef always sends messages to his friends in all small letters, whereas the little brother sends messages in all capital letters.

You just received a message given by a string **s**. You don't know whether this message is sent by Chef or his brother. Also, the communication channel through which you received the message is erroneous and hence can flip a letter from uppercase to lowercase or vice versa. However, you know that this channel can make at most **K** such flips.

Determine whether the message could have been sent only by Chef, only by the little brother, by both or by none.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **K** denoting the length of the string **s** and the maximum number of flips that the erroneous channel can make.
- The second line contains a single string **s** denoting the message you received.

### Output

For each test case, output a single line containing one string — "chef", "brother", "both" or "none".

### Constraints

- 1 ≤ **T** ≤ 1000
- 1 ≤ **N** ≤ 100
- 0 ≤ **K** ≤ **N**
- **s** consists only of (lowercase and uppercase) English letters

### Example

<pre>
<b>Input</b>

4
5 1
frauD
5 1
FRAUD
4 4
Life
10 4
sTRAWBerry

<b>Output</b>

chef
brother
both
none
</pre>### Explanation

**Example case 1:** Only one flip is possible. So it is possible that Chef sent "fraud" and the channel flipped the last character to get "frauD". However, it is not possible for the brother to have sent "FRAUD", because then it would need 4 flips. Hence the answer is "chef".

**Example case 2:** Only one flip is possible. So it is possible that the brother sent "FRAUD" and the channel didn't flip anything. However, it is not possible for Chef to have sent "fraud", because then it would need 5 flips. Hence the answer is "brother".

**Example case 3:** Four flips are allowed. It is possible that Chef sent "life" and the channel flipped the first character to get "Life". It is also possible that the brother sent "LIFE" and the channel flipped the last three characters to get "Life". Hence the answer is "both".

**Example case 4:** Four flips are allowed. It is not possible that Chef sent "strawberry", because it would need five flips to get "sTRAWBerry". It is also not possible that the brother sent "STRAWBERRY", because that would also need five flips. Hence the answer is "none".
