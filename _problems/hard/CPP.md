---
category_name: hard
problem_code: CPP
problem_name: 'Chef Protection Plan'
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
problem_author: 'vinayak garg'
problem_tester: pieguy
date_added: 16-01-2013
tags:
    - grammar
    - hard
    - may13
    - regex
    - string
    - vinayak
editorial_url: 'http://discuss.codechef.com/problems/CPP'
time:
    view_start_date: 1368441257
    submit_start_date: 1368441000
    visible_start_date: 1368441000
    end_date: 1735669800
    current: 1493556669
layout: problem
---
All submissions for this problem are available.Chef's restaurants are under attack. His competitors in disguise of customers or employees visit his restaurants and create trouble. Chef is extremely agitated. When he calms down he decides to beef up security. The plan is codenamed "Chef Protection Plan". Under this plan, everything is checked before being entered into restaurants. After much thinking it was decided to check for identification numbers of cooks, customers, delivery van etc. Various types of identification numbers to be checked are : "Security number", "Employee number", "Roll number" etc.

Chef has restaurants all over the world. Different places have different **format**s for a given **identification number** and there are too many types of identification numbers. Thus Chef needs to specify the format for all the identification numbers in a convenient way. The format should also be consistent because the code monkeys who will be automating the process are not very careful with specifications. An identification number is composed of uppercase letters and digits and hyphen ('-') only. Thus instead of calling it an identification number, we will call it an **ID string** henceforth.
The rules used by Chef for specifying a **format of an ID string** are (formats are underlined)-

- A portion of string can be a fixed string, i.e. matches itself exactly only. Like XYZ, A321, D-409 etc.
- The specification contains keywords in lowercase to describe the ID string. This is the list of keywords, along with their meaning-
     - **to** : is used for specifying a *range* from a letter to letter or a digit to digit. Like 3 to 8, D to Z etc. Note that ranges of numbers cannot be specified using **to**. 1 to 1000 is **invalid** because 1000 is not a digit but a number. Also D to A is invalid because the left-hand-side should not be greater than the right-hand-side.
     - **or** : is used to specify a list of exclusive options. Like XYZ or Y2K, 1 or 3 or 55 etc.
     - **times** : is used to specify the number of times (**N**) a portion of the format string is to be repeated. Like A 3 times, S01 12 times etc. The first example can also be specified simply as AAA instead. Thus as you will see there are multiple ways to specify same type of ID strings. Also the portion (to be repeated) is smallest meaningful expression. Like in A B 2 times, 'B' is repeated 2 times and not 'AB'.
     - **optional** : is used to specify that the string portion is optional, i.e can be present or absent. Like LP optional, 12KL optional etc. Also the portion (to be made optional) is smallest meaningful expression. Like in A B optional, 'B' is optional and not 'AB'.
     - **digit** : is used to specify any digit. It is same as writing 0 to 9 or 0 or 1 or 2 or 3 or 4 or 5 or 6 or 7 or 8 or 9 in the rule.
     - **letter** : is used to specify any letter. It is same as writing A to Z or A or B or C... in the rule.
     - **digits** : is used to specify the number of times any digit may be repeated. It can be specified in two ways-
     -- **exactly N digits**, where **N** is an integer. Like exactly 3 digits matches 007 and 987 but not 5 or 42
     -- **upto N digits**, where **N** is an integer. Like upto 3 digits matches 7, 42 and 987 but not 4444. This rule can also match 0 digits. See the examples below.
     - **letters** : is used to specify the number of times any letter may be repeated. It can be specified in two ways-
     -- **exactly N letters**, where **N** is an integer. Like exactly 3 letters matches ABC and CPP but not Z or VG
     -- **upto N letters**, where **N** is an integer. Like upto 3 letters matches A, BC and DEF but not PQRS. This rule can also match 0 letters.
- The above keywords can be used to describe a portion of the format string. By writing such "sub-formats" side by side we can describe entire ID string. Like 3 to 8 XYZ or Y2K matches 4XYZ, 7Y2K etc. but not XYZ, Y2K5 etc.
- The sub-formats can be nested as well. Like 3 to 8 or Y2K, digit 2 times. Notice that second example is equivalent to exactly 2 digits.
- Parentheses can be used to enforce grouping in formats or to provide clarity. Like XYZ 12 or 34 optional makes 34 optional. Instead if you want '12 or 34' to be optional, you can use parentheses : XYZ (12 or 34) optional. Parenthesis can also be used when they are not really required. Like ((XYZ)) 234 is equivalent to XYZ 234, which can also be written as XYZ234. Note that () is invalid, because Chef believes empty parenthesis are useless.
- Spaces are used to separate keywords, strings, numbers, digits and letters from each other. Like ABCoptional is invalid, but ABC optional is valid. Spaces are very useful in breaking apart strings, like AB CD 2 times. Parenthesis can also be used for separation, like AB(CD)2 times is same as the last format. But A(to)B is invalid as parenthesis enforce grouping as well and (to) alone is invalid.

Now Chef is lousy at writing formats. Like he can add unnecessary spaces around words. He won't add stray symbols though. Also being a human he can sometimes end up writing erroneous formats -- the ones which do not conform to his rules. Like optional ABC, 1 to A etc. are invalid formats. **But he would never use symbols apart from lowercase/uppercase letter, digits, parenthesis, hyphen(-) and space.**

### Input

First line contains a single integer **T**, which specifies the number of test cases. First line of each test case contains **F**, the format of an ID string. The next line contains an integer **Q**. Then the next Q lines contain **IDS**, one ID string on each line.

### Output

For each ID string output "Valid-ID" if the ID string conforms to the format, "Invalid-ID" otherwise. You need to ignore the queries (ID strings) for the following type of formats-

1\. If the format is inconsistent with the rules, output "Format does not conform".

2\. If the format is consistent with rules but can match ID strings which exceed the constraint imposed on **IDS** (possible length of IDS &gt; 2000), output "Matches too long ID".

3\. If **N** (used in X N times, exactly N digits etc.) is less than 2 or greater than 12, output "Format does not conform"

After each test case output an empty line.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **length of F** ≤ 1000
- 0 ≤ **Q** ≤ 1000
- 1 ≤ **length of IDS** ≤ 2000

### Example

<pre>
<b>Input:</b>
5
  A to D - 1 to 4 exactly 2 digits  
5
D-409
A-413
CD-123
M987
B-1
1 to 9 digit optional    digit optional -   CO or EC or IT - 09
4
326-CO-09
123-EC-09
1-IT-09
123-EC-08
X (YZ 1 optional  A413)     optional
3
X
XYZA413
XYZ1A413
A to G upto 2 digits (1 or 3 or 5) 2 times  
4
A15
G633
a15
B5
12times
1
123456789012

<b>Output:</b>
Valid-ID
Valid-ID
Invalid-ID
Invalid-ID
Invalid-ID

Valid-ID
Valid-ID
Valid-ID
Invalid-ID

Valid-ID
Valid-ID
Valid-ID

Valid-ID
Valid-ID
Invalid-ID
Invalid-ID

Format does not conform

</pre>
### Notes

- "or" has the least precedence among all keywords. For example 1 or 2 3 times is interpreted as 1 or (2 3 times) instead of (1 or 2) 3 times.
- "optional" and "times" have equal precedence, which is lower than all other keywords but higher than "or". Like 1 to 3 4 times is interpreted as (1 to 3) 4 times.
