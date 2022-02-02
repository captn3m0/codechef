---
{"category_name":"easy","problem_code":"CENS20C","problem_name":"Cherry and Pyramid","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cherry0697","problem_tester":"","date_added":"13-07-2020","tags":{"0":"cens2020","1":"cherry0697","2":"saurabhshadow"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CENS20C","time":{"view_start_date":1597860000,"submit_start_date":1597860000,"visible_start_date":1597860000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CENS20C","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Cherry has a string $S$ consisting of lowercase English letters. Using this string, he formed a pyramid of infinite length with certain rules:

1. $N$-th row of pyramid contains $N$ characters.
2. Each row of pyramid begins with the first character of the string.
3. The subsequent characters of the row are appended to the string in cyclic fashion, until the size of string for that Row is reached (See example pyramid for better understanding).

He has another string $T$ of smaller (or equal) size.

You are asked $Q$ queries. Each query is provided with a row number $N$. The answer to the query is number of occurrences of string $T$ in that particular row of pyramid. No of occurrences of String $T$ in a string $V$ would mean that you'd need to find number of substrings $V_i, V_{i+1} ... V_j$ which are equal to String $T$, where $i \leq j$.

For eg: If the string is **code**, then the pyramid will be of the form:
```
c
co
cod
code
codec
codeco
codecod
codecode
codecodec
codecodeco
...
```

###Input:
- The first line contains string $S$ — consisting of lowercase English letters.
- The second line contains string $T$ — consisting of lowercase English letters.
- Next line contains an integer $Q$ — the number of queries.
- Then follow $Q$ lines with queries descriptions. Each of them contains a single integer $N$ denoting the row number of pyramid.

###Output:
- Print $Q$ lines. The $i$-th of them should contain a integer denoting occurrences of string $T$ in that particular row.

###Constraints
- $1 \leq |S| \leq 10^5$
- $1 \leq |T| \leq |S|$
- $1 \leq Q \leq 10^5$
-  $1 \leq N \leq 10^9$

###Sample Input:
```
codechef
chefcode
3
4
12
1455
```

###Sample Output:
```
0
1
181
```

###Explanation:
Pyramid will be formed as explained in the statement.

**Query 1:** Row number **4** of the pyramid is **code**. The number of occurrences of **chefcode** in **code** is **0**.

**Query 2:** Row number **12** of the pyramid is **codechefcode**. The number of occurrences of **chefcode** in **codechefcode** is **1**.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>