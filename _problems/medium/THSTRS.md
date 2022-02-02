---
{"category_name":"medium","problem_code":"THSTRS","problem_name":"Three Strings","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.75,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1545157800,"submit_start_date":1545157800,"visible_start_date":1545157800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given three strings $A, B, C$.

You want to find a string $Z$ (possibly empty) such that the string $A + Z + B$ contains $C$ as a substring.

Find out the smallest possible length of string $A + Z + B$ that can satisfy the above criteria.

### Input
- The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows.
- Each testcase consists of three lines which contain the strings $A, B, C$ respectively.

### Output
For each test case, output an integer corresponding to the answer of the problem.

###Constraints
- $1 \le T \le 10^5$
- $1 \le |A|, |B|, |C| \leq 2 * 10^5$
- Each string consists only of lower case English alphabets ('a' to 'z')
- Sum of the length of all three strings over all the testcases doesn't exceed $6 * 10^6$

### Example Input
```
2
abc
cde
bccd
abc
cde
cec
```

### Example Output
```
6
7
```

###Explanation:
**Testcase 1**: Take $Z$ to be the empty string. So now, $A + Z + B$ becomes "abccde", and "bccd" is a substring of it. So this is a valid choice, and you can see that you cannot get a shorter string. Hence the answer is 6.

**Testcase 2**: Take $Z$ = "e". So now, $A + Z + B$ becomes "abcecde", and "cec" is a substring of it. So this is a valid choice, and you can see that you cannot get a shorter string. Hence the answer is 7.