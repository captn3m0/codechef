---
{"category_name":"easy","problem_code":"SDIFFSTR","problem_name":"Sufficiently different string","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"23-12-2019","tags":{"0":"balajiganapath"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1577730600,"submit_start_date":1577730600,"visible_start_date":1577730600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SDIFFSTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are teaching students to generate strings consisting of _unique_ lowercase latin characters (a-z). You give an example reference string $s$ to the students.

You notice that your students just copy paste the reference string instead of creating their own string. So, you tweak the requirements for strings submitted by the students.

Let us define a function *F(s, t)* where s and t are strings as the number of characters that are same in both the strings. Note that the position doesn't matter. Here are a few examples of F(s, t):

F("abc", "def") = 0

F("abc", "acb") = 3

F("back", "abcd") = 3

Now you ask your students to output a string t with lowercase unique characters of the same length as $s$, such that F(s, t) $\leq k$ where you are also given the value of $k$. If there are multiple such strings, you ask them to output the lexicographically smallest possible string. If no such string is possible, output the string "NOPE" without quotes.


###Input:

- The first line will contain $T$, the number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, which contains a string $s$ and an integer $k$.

###Output:
For each testcase, output in a single line the lexicographically smallest string t such that F(s, t) <= k or "NOPE" without quotes if no such string exists.

###Constraints 
- $1 \leq T \leq 10000$
- $1 \leq $length of string s $(|s|) \leq 26$
- $s$ only consists of characters $a$ to $z$
- There are no repeating characters in s
- $0 \leq k \leq |s|$

###Sample Input:
```
4
helowrd 0
background 0
abcdefghijklmnopqrstuvwxyz 0
b 1
```

###Sample Output:
```
abcfgij
efhijlmpqs
NOPE
a
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>