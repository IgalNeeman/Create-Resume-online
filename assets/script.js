document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('cvForm');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const name = document.getElementById('name').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const email = document.getElementById('email').value.trim();
        const summary = document.getElementById('summary').value.trim();
        const experience = document.getElementById('experience').value.trim();
        const education = document.getElementById('education').value.trim();
        const skills = document.getElementById('skills').value.trim();
        const army = document.getElementById('army').value.trim();

        let content = `
קורות חיים

שם מלא: ${name}
טלפון: ${phone}
אימייל: ${email}

תקציר מקצועי:
${summary}

ניסיון תעסוקתי:
${experience}

השכלה:
${education}

כישורים נוספים:
${skills}

שירות צבאי / לאומי:
${army}
        `;

        const blob = new Blob([content], { type: 'application/msword' });
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = `${name || 'קורות_חיים'}.doc`;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        URL.revokeObjectURL(link.href);
    });
});
