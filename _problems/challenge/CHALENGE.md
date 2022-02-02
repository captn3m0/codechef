---
{"category_name":"challenge","problem_code":"CHALENGE","problem_name":"Password Cracking Challenge","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"pragrame","date_added":"11-02-2013","tags":{"0":"ad","1":"bruteforce","2":"challenge","3":"interactive","4":"may13","5":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/CHALENGE","time":{"view_start_date":1368441284,"submit_start_date":1368441284,"visible_start_date":1368441000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has recently discovered a weakness in the password verification system on a network of servers, and has enlisted your help in determining the practicality of an attack.  Chef discovered that if he simultaneously sends password guesses to all servers, he can measure the response time to determine how accurately the guesses were.  Some of the servers in the network are "honeypot" servers that accept password guesses but cannot be accessed.  Chef does not know which servers are honeypots, but he knows how many there are.</p>
<p>Each server has a password consisting of between 8 and 12 lowercase alphabetic characters.  There is also a "salt" string which is 8 characters long.  When a password guess comes to a server, the password guess is appended with the salt string, and then hashed with the SHA1 hashing algorithm.  (Most of the details of the <a href="http://en.wikipedia.org/wiki/SHA-1">SHA1</a> hashing algorithm are not relevant to this problem, other than the fact that it has an output size of 160 bits, each of which equally likely to be 0 or 1.)  The result is compared to the SHA1 hash of the actual password appended with the salt string. Chef is able to calculate the sum of the squares of the number of matching bits on each non-honeypot server (after all, the honeypot servers don't give any feedback).  This sum is denoted the "score" of a guess.</p>
<p>There is a limit on the number of password guesses Chef can make.  Chef would like you to make password guesses, and try to attain a high guess score.</p>
<h3>Input + Output</h3>
<p>Input will begin with a line containing three integers: <b>T</b>, the number of password guesses to perform, <b>N</b>, the total number of servers, and <b>H</b>, the number of honeypot servers.  After reading <b>T</b>, <b>N</b>, and <b>H</b>, repeat the following procedure <b>T</b> times.</p>
<p>Print a password guess, consisting of <b>N</b> lowercase alphabetic strings of length between 8 and 12.  Make sure to print a newline and flush the output buffer after printing the last string.  Then read a line containing a single integer <b>S</b>, the score of the guess.</p>
<p><i>Attention: the program should clear the output buffer after printing each guess. It can be done using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout). Failure to flush the output buffer will result in Time Limit Exceeded verdict.</i></p>
<h3>Scoring</h3>
<p>Your score will be the highest score across all password guesses, divided by <b>N-H</b>.<br />
The goal is to maximise this score.</p>
<h3>Sample Input + Output</h3>
<pre><code>
In:  4 3 1
Out: applepie
Out: berrypie
Out: cherrypie
In:  12186
Out: bananapie
Out: custardpie
Out: lemonpie
In:  13466
Out: keylimepie
Out: pecanpie
Out: blueberrypie
In:  7785
Out: chocolatepie
Out: custardpie
Out: peachpie
In:  10517

</code></pre><h3>Explanation</h3>
<p>The salt is "codechef".  The first server's password is "challenge".  The second server is the honeypot, and the third server's password is "maythirteen".  On the first guess, the hash of "applepiecodechef" is compared to the hash of "challengecodechef" and the hash of "cherrypiecodechef" is compared to the hash of "maythirteencodechef".  The hash of "applepiecodechef" is "EC70A4442061F08180BDD0E1A4BD8284C5C72978", and the hash of "challengecodechef" is "4DE646F7F99F2735957070C9D49F1DA6960A8DD1".  The hashes share 81 bits.  On the third server, the hashes share 75 bits.  Thus the first guess scores <b>81*81+75*75 = 12186</b>.</p>
<p>The best score across all 4 guesses is 13466, therefore this sample would score <b>13466/(3-1) = 6733</b>.</p>
<h3>Test Case Generation</h3>
<p><b>T</b> is chosen randomly and uniformly between 250 and 2000.  <b>N</b> is chosen randomly and uniformly between 50 and 200.  <b>H</b> is chosen randomly and uniformly between <b>max(N-50,N/2)</b> and <b>N-10</b>, inclusive.  The salt and each of the <b>N-H</b> password strings are generated by first randomly choosing a length <b>L</b> between 8 and 12, and then choosing <b>L</b> random lowercase alphabetic characters.  Each of the <b>N-H</b> password strings is assigned to a random server, ensuring no server is assigned multiple passwords.  The remaining H servers become honeypot servers.</p>
<p><i>Note: The test data is not guaranteed to be the same across multiple submissions, however <b>T</b>, <b>N</b>, and <b>H</b> will be the same across all submissions.</i></p>
