---
category_name: medium
problem_code: ZUBPASSR
problem_name: 'E - Password Riddle'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: zubaerkh
problem_tester: null
date_added: 7-11-2017
tags:
    - zubaerkh
time:
    view_start_date: 1517085000
    submit_start_date: 1517085000
    visible_start_date: 1517085000
    end_date: 1735669800
    current: 1525198961
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.*"What's your password, Ranju?"*
*"one two three four"*, Ranju said

Do you think it's *1234*? No, it's not. As it turns out that Ranju has made a riddle with his password. It's actually *2444*. Clever, isn't it? It's one *2* and three *4*s.

However, if we told Ranju to write down his password, he would write this - *"one two, three four."* Note that comma. It helps a lot, right? the comma separates two segments of the password.

Let's formalize things a little. The rules Ranju made to describe a password (containing digits from *0-9* only) are:

- Ranju will use only the words *zero, one, two, three, four, five, six, seven, eight, nine, odd, even*. These are called *literal*s.
- He will also use *comma*s to separate the *segment*s and a *full stop* to mark the end.
- Each segment will consist of one *clause*. A clause can be either: 
    - A literal followed by a clause. *or*,
    - A literal.
- A literal matches with a digit/number as per following rules: 
    - *zero, one, two, ... , nine* match with *0, 1, 2, ... , 9* respectively.
    - *odd* matches with any of the 5 odd digits/numbers - *1, 3, 5, 7, 9*
    - *even* matches with any of the *5* even digits/numbers - *0, 2, 4, 6, 8*
- For a clause which has a literal followed by another clause, we call the literal *directive literal* and the following clause *child clause*. This kind of clause matches with the occurrence of the child clause a number of times directed by the directive literal.

Let's consider the clause *two odd three*. Here the directive literal is *two* and child clause is *odd three*. The child clause also has a directive literal(*odd*) and a child clause(*three*). the clause *odd three* matches with *3*, *333*, *33333*, etc. The clause *two odd three* matches with *33* (two occurrences of *3*), *333333* (two occurrences of *333*), etc. Note that it doesn't match with *3333* (the concatenation of *3* and *333*). The child clauses should be identical.

You will be given a password riddle and a password. Your job is to find out if it is possible to match the riddle with the password. You may assume that consecutive occurrences of the same digit in the password will **not** be described with more than one segments in the riddle. While matching the password, you are not required to use all of the segments (i.e. you can **skip** some segments. Please check the last sample test case for clarification).

### Input

- The first line of the input is the number of test cases, **T**. Description of each test case is given below.
- The first line contains the riddle. It may have several segments as described above. The last literal of each segment will be followed by a comma or a full stop (without any space). Please check the sample input.
- The second line contains an integer indicating the length of the password.
- The following line contains the password. The password has digits from 0 to *9* with no white space.

### Output

For each testcase, print "Case i: ", and then the answer, where i is the testcase number, 1-indexed. The answer should be **"MAY BE"** (if it is possible to match the riddle with the password) or **"NO"** (if the password doesn't match). Don't print any quotation marks.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ Number of segments in a riddle ≤ 100
- 1 ≤ Number of literals in a riddle ≤ 600000
- 1 ≤ Length of a password ≤ 600000
- Length of a riddle won't exceed 2.5 \* 106.

### Example

<pre><b>Input:</b>
7
two odd three.
6
333333
two odd three.
4
3333
odd five, two three.
11
55555555533
one odd odd, zero six, five even, six.
9
111888886
four odd three, two two.
7
3333322
one four, one two.
2
24
one two, one five.
1
5

<b>Output:</b>
Case 1: MAY BE
Case 2: NO
Case 3: MAY BE
Case 4: MAY BE
Case 5: NO
Case 6: NO
Case 7: MAY BE
</pre>
### Explanation

**Testcase 1** and **testcase 2** are described in the statement.

In **testcase 3**, there are nine *5*s and two *3*s which matches with the riddle.

In **testcase 4**, we can match the clause *odd odd* with three occurrences of *1*. Hence *one odd odd* matches with *111*. *zero six* matches with zero occurrences of *6* (we can skip the segment *zero six*). *five even* matches with *88888*. Finally, *six* matches with *6*.

In **testcase 5**, we cannot match the password with the riddle.

In **testcase 6**, the riddle doesn't match with the password. However, the riddle would match with *42*.

In **testcase 7**, we can skip the segment *one two* and match *one five* with *5*.
