---
{"category_name":"medium","problem_code":"MINMXSTR","problem_name":"Min-Max String","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"dj_r_1","problem_tester":"","date_added":"18-06-2020","tags":{"0":"binary","1":"data","2":"dem2020","3":"dj_r_1","4":"medium","5":"trie"},"problem_difficulty_level":"Medium","best_tag":"Binary Lifting","editorial_url":"https://discuss.codechef.com/problems/MINMXSTR","time":{"view_start_date":1597339800,"submit_start_date":1597339800,"visible_start_date":1597339800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MINMXSTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are initially given a collection of $N$ **distinct** strings. The $i^{th}$ string in the order of input, is assigned index $i$. (i.e. the first string is assigned index $1$, second string is assigned index $2$, …, the $N^{th}$ string is assigned index $N$). 

You have to process $Q$ queries.
Each query can be of one of three types:

- $1$ $x$ $c$  
Insert a new string into the collection, which is equal to the concatenation of string at index $x$ and the character $c$. This new string is assigned index $p+1$, where $p$ is the number of strings in the collection before this query. **It is guaranteed that this new string does not already exist in the collection before this query.**

- $2$  
Print the index of the lexicographically minimal string in the collection, which is NOT a proper prefix of any other string in the collection.

- $3$  
Print the index of the lexicographically maximal string in the collection, which is NOT a proper prefix of any other string in the collection.

**All the initial strings, as well as the characters in the queries of first type, consist of lowercase English alphabets only.**

### Input Format:

First line contains a single integer $T$, the number of testcases. Then for each testcase,
- First line contains a single integer $N$, the initial number of strings in the collection.
- $N$ lines follow. The $i^{th}$ line contains the string with index $i$ ($1\le i\le N$).
- The next line contains a single integer $Q$, number of queries.
- $Q$ lines follow, each containing a query of one of the three types described above. 

### Output Format:

For each query of type $2$ and $3$, output a single line containing a single integer - the answer to the query.

### Constraints:
- $1\le T\le 5$
- $1\le N\le 10^4$
- $1\le Q\le 2*10^5$
- The initial $N$ strings are all distinct.
- Sum of lengths of all initial strings across all testcases does not exceed $2*10^5$.
- Sum of number of queries across all testcases does not exceed $2*10^5$.
- For each query of type 1, index $x$ is such that $1\le x\le p$, where $p$ is the number of strings in the collection before that query.
- It is guaranteed that there will be at least one query of type 2 or 3 in each testcase. 

### Sample Input:

1  
3  
abcdef  
abc  
xyz  
6  
1 2 d  
2  
3  
1 4 c  
2  
3  

### Sample Output:

1  
3  
5  
3  

### Explanation:

Before the first query, the collection is {"abcdef", "abc", "xyz"}. String with index 2 is "abc". So we form a new string ("abc"+"d" = "abcd"), and since there were 3 strings before, we assign it index 4. Now collection is {"abcdef", "abc", "xyz", "abcd"}.

The desired string for the second query is "abcdef", which has an index of 1, so we output 1. Note that "abc" or "abcd" cannot be the answers since they are proper prefixes of another string in the collection ("abcdef").

The desired string for the third query is "xyz", having index 3, so we output 3.

In the 4th query, we have to add a new string to the collection which is: string at index 4 + "c" = "abcd"+"c"= "abcdc". Now collection is {"abcdef", "abc", "xyz", "abcd", "abcdc"}.

For the 5th query, "abcdc" is the lexicographically minimum string and it has index 5, so we output 5.

 For the last query, again the desired string is "xyz", having index 3, so we output 3.  
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>