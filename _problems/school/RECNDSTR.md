---
{"category_name":"school","problem_code":"RECNDSTR","problem_name":"Chef and String","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"31-12-2019","tags":{"0":"ad","1":"observation","2":"rc122020","3":"rishup_nitdgp","4":"rishup_nitdgp","5":"sachin_yadav","6":"simple"},"problem_difficulty_level":"Simple","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/RECNDSTR","time":{"view_start_date":1588010400,"submit_start_date":1588010400,"visible_start_date":1588010400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RECNDSTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef has a string $S$ consisting of lowercase English characters. Chef defined functions left shift $L(X)$ and right shift $R(X)$ as follows.
- $L(X)$ is defined as shifting all characters of string $X$  one step towards left and moving the first character to the end.
- $R(X)$ is defined as shifting all characters of string $X$ one step towards the right and moving the last character to the beginning.

For example, L("abcd") = "bcda" and R("abcd") = "dabc"

Chef wants to find out whether there exists a string $V$ of the same length as $S$ such that both $L(V) = S$ and $R(V) = S$ holds.

###Input:
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a string $S$.

###Output:
For each test case, If there exists a valid string $V$, print "YES", otherwise print "NO" (without the quotes).

###Constraints 
- $1 \le T \le 100$
- $1 \le |S| \le 10^6$
- $S$ contains all lower case English alphabets.
- It's guaranteed that the total length of the strings in one test file doesn't exceed $10^6$

### Sample Input:
```
4
a
ab
abcd
aaaaa
```

### Sample Output:
```
YES
YES
NO
YES
```

### Explanation:

- In the first test case, Chef can choose $V = S$
- In the second test case, Chef can choose $V$ = "ba" which satisfies both conditions.
- There doesn't exist any valid choice for string $V$ in the third test case.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>