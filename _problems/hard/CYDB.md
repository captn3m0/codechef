---
{"languages_supported":{"0":"NA"},"title":"CYDB","category":"NA","old_version":true,"problem_code":"CYDB","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Your task is to write a program which computes exactly the same result as Chef's programs below. He was kind enough to provide you with the same program written in three different programming languages. However, your solution should be much faster.</p>
<p><b>C++</b></p>
<pre>#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main() {
	string a, b, c;
	int na, nb, r;
	cin &gt;&gt; a;
	na = a.size();
	cin &gt;&gt; b;
	nb = b.size();
	cin &gt;&gt; c;
	r = 0;
	for (int i = 0; i &lt; nb; i++) {
		for (int j = 1; j &lt; min(na+1, nb-i+1); j++) {
			bool f = true;
			int d = 0;
			for (int k = 0; k &lt; j; k++) {
				if (a[k] != b[i+k]) { 
					if (c[k] == '1')  { d += 1; }
					else { f = false; }
				}
			}
			if (f &amp;&amp; d &lt;= 2) { r = (r + j*j) % 1000000007; }
		}
	}
	cout &lt;&lt; r &lt;&lt; endl;
	return 0;
}
</pre>
<p> </p>
<p><b>Java</b></p>
<pre>import java.util.Scanner;

public class Main {

	static String a, b, c;
	static int na, nb, r;

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		a = sc.next();
		na = a.length();
		b = sc.next();
		nb = b.length();
		c = sc.next();
		r = 0;
		for (int i = 0; i &lt; nb; i++) {
			for (int j = 1; j &lt; Math.min(na+1, nb-i+1); j++) {
				boolean f = true;
				int d = 0;
				for (int k = 0; k &lt; j; k++) {
					if (a.charAt(k) != b.charAt(i+k)) { 
						if (c.charAt(k) == '1') { d += 1; }
						else { f = false; }
					}
				}
				if (f &amp;&amp; d &lt;= 2) { r = (r + j*j) % 1000000007; }
			}
		}
		System.out.println(r);
	}
}
</pre>
<p> </p>
<p><b>Python</b></p>
<pre>a = raw_input()
na = len(a)
b = raw_input()
nb = len(b)
c = raw_input()
r = 0
for i in range(nb):
	for j in range(1, min(na+1, nb-i+1)):
		f = True
		d = 0
		for k in range(j):
			if (a[k] != b[i+k]):
				if (c[k] == '1'): d +=1
				else: f = False
		if (f and d &lt;= 2): r = (r + j*j) % 1000000007
print r
</pre>
<p> </p>
<h3>Input</h3>
<p>The strings A, B and C are provided in a compressed form to keep the input small enough. Sequence 00000 is encoded with letter 'a', 00001 with 'b' and so on until 'z'. 11010 is represented by 'A' and 11111 by 'F'.</p>
<p>The input consists of three lines of letters a-z, A-F. First line contains at most 200 characters and the second one at most 2 000 000. Third line has the same length as the first line and will contain at most 40 digits 1 when decompressed.</p>
<h3>Example</h3>
<pre><b>Input:</b>
aBFn
ygFBg
bbdb

<b>Output:</b>
2990
</pre>
<h3>Explanation</h3>
<p>After decompression we get strings 00000110111111101101, 1100000110111111101100110 and 00001000010001100001. If we run chef's program with this decompressed input, we will get 2990 as a result.</p>    