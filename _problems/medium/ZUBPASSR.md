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
All submissions for this problem are available._"What's your password, Ranju?"_
_"one two three four"_, Ranju said

Do you think it's _1234_? No, it's not. As it turns out that Ranju has made a riddle with his password. It's actually _2444_. Clever, isn't it? It's one _2_ and three _4_s.

However, if we told Ranju to write down his password, he would write this - _"one two, three four."_ Note that comma. It helps a lot, right? the comma separates two segments of the password.

Let's formalize things a little. The rules Ranju made to describe a password (containing digits from _0-9_ only) are:

- Ranju will use only the words _zero, one, two, three, four, five, six, seven, eight, nine, odd, even_. These are called _literal_s.
- He will also use _comma_s to separate the _segment_s and a _full stop_ to mark the end.
- Each segment will consist of one _clause_. A clause can be either: 
  - A literal followed by a clause. _or_,
  - A literal.
- A literal matches with a digit/number as per following rules: 
  - _zero, one, two, ... , nine_ match with _0, 1, 2, ... , 9_ respectively.
  - _odd_ matches with any of the 5 odd digits/numbers - _1, 3, 5, 7, 9_
  - _even_ matches with any of the _5_ even digits/numbers - _0, 2, 4, 6, 8_
- For a clause which has a literal followed by another clause, we call the literal _directive literal_ and the following clause _child clause_. This kind of clause matches with the occurrence of the child clause a number of times directed by the directive literal.

Let's consider the clause _two odd three_. Here the directive literal is _two_ and child clause is _odd three_. The child clause also has a directive literal(_odd_) and a child clause(_three_). the clause _odd three_ matches with _3_, _333_, _33333_, etc. The clause _two odd three_ matches with _33_ (two occurrences of _3_), _333333_ (two occurrences of _333_), etc. Note that it doesn't match with _3333_ (the concatenation of _3_ and _333_). The child clauses should be identical.

You will be given a password riddle and a password. Your job is to find out if it is possible to match the riddle with the password. You may assume that consecutive occurrences of the same digit in the password will **not** be described with more than one segments in the riddle. While matching the password, you are not required to use all of the segments (i.e. you can **skip** some segments. Please check the last sample test case for clarification).

### Input

- The first line of the input is the number of test cases, **T**. Description of each test case is given below.
- The first line contains the riddle. It may have several segments as described above. The last literal of each segment will be followed by a comma or a full stop (without any space). Please check the sample input.
- The second line contains an integer indicating the length of the password.
- The following line contains the password. The password has digits from 0 to _9_ with no white space.

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
</pre>### Explanation

**Testcase 1** and **testcase 2** are described in the statement.

In **testcase 3**, there are nine _5_s and two _3_s which matches with the riddle.

In **testcase 4**, we can match the clause _odd odd_ with three occurrences of _1_. Hence _one odd odd_ matches with _111_. _zero six_ matches with zero occurrences of _6_ (we can skip the segment _zero six_). _five even_ matches with _88888_. Finally, _six_ matches with _6_.

In **testcase 5**, we cannot match the password with the riddle.

In **testcase 6**, the riddle doesn't match with the password. However, the riddle would match with _42_.

In **testcase 7**, we can skip the segment _one two_ and match _one five_ with _5_.
